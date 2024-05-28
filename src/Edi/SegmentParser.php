<?php

namespace BrodSolutions\Edi;

use BrodSolutions\Edi;

/**
 * Class SegmentParser
 * @package BrodSolutions\Parse
 */
class SegmentParser
{
    /**
     * @param array $documents
     * @return array
     */
    public static function parseAllSegmentsAsArray(array $documents) {
        $documentParsed = array();
        foreach ($documents as $document) {
            foreach ($document->getSegments() as $segment) {
                if (isset(Edi::$segmentMapping[$segment[0]])) {
                    $className = Edi::$segmentMapping[$segment[0]];
                    $documentParsed[] = (new $className)->parse($segment);
                }else{
                    //info('Segment not found: '.$segment[0]);
                }
            }
        }

        return $documentParsed;
    }

    public static function formatParsedArray(array $parsed) : array{
        $formatted = [];
        //Control header
        $isa = self::getParsedSegment('ISA', $parsed);
        if($isa){
            $formatted['ISA'] = $isa['item'];
            unset($parsed[$isa['key']]);
        }
        //Functional group header
        $gs = self::getParsedSegment('GS', $parsed);
        if($gs){
            $formatted['GS'] = $gs['item'];
            unset($parsed[$gs['key']]);
        }
        //Transaction set header
        $st = self::getParsedSegment('ST', $parsed);
        if($st){
            $formatted['ST'] = $st['item'];
            unset($parsed[$st['key']]);
        }
        //Beginning segment
        $beg = self::getParsedSegment('BEG', $parsed);
        if($beg){
            $formatted['BEG'] = $beg['item'];
            unset($parsed[$beg['key']]);
        }
        //Currency
        $cur = self::getParsedSegment('CUR', $parsed);
        if($cur){
            $formatted['CUR'] = $cur['item'];
            unset($parsed[$cur['key']]);
        }
        //Reference
        $formatted['REF'] = [];
        while($ref = self::getParsedSegment('REF', $parsed)){
            $formatted['REF'][] = $ref['item'];
            unset($parsed[$ref['key']]);
        }
        //FOB
        $formatted['FOB'] = [];
        while($fob = self::getParsedSegment('FOB', $parsed)){
            $formatted['FOB'][] = $fob['item'];
            unset($parsed[$fob['key']]);
        }
        //SAC Loop
        $formatted['SAC'] = [];
        while($sac = self::getParsedSegment('SAC', $parsed)){
            $formatted['SAC'][] = $sac['item'];
            unset($parsed[$sac['key']]);
        }
        //ITD
        $formatted['ITD'] = [];
        while($itd = self::getParsedSegment('ITD', $parsed)){
            $formatted['ITD'][] = $itd['item'];
            unset($parsed[$itd['key']]);
        }
        //DTM
        $formatted['DTM'] = [];
        while($dtm = self::getParsedSegment('DTM', $parsed)){
            $formatted['DTM'][] = $dtm['item'];
            unset($parsed[$dtm['key']]);
        }
        //TD5
        $formatted['TD5'] = [];
        while($td5 = self::getParsedSegment('TD5', $parsed)){
            $formatted['TD5'][] = $td5['item'];
            unset($parsed[$td5['key']]);
        }
        //n9 Loop
        $formatted['N9'] = [];
        while($n9 = self::getParsedSegment('N9', $parsed)){
            if(!empty($n9['additionalItems'])){
                $formatted['N9'][] = [$n9['item'], $n9['additionalItems']];
            }else $formatted['N9'][] = $n9['item'];
            unset($parsed[$n9['key']]);
        }
        //n1 Loop
        $formatted['N1'] = [];
        while($n1 = self::getParsedSegment('N1', $parsed)){
            if(!empty($n1['additionalItems'])){
                $formatted['N1'][] = [$n1['item'], $n1['additionalItems']];
            }else $formatted['N1'][] = $n1['item'];
            unset($parsed[$n1['key']]);
        }
        //Po1 Loop
        while($po1 = self::getParsedSegment('PO1', $parsed)){
            if(!empty($po1['additionalItems'])){
                $formatted['PO1'][] = [$po1['item'], $po1['additionalItems']];
            }else $formatted['PO1'][] = $po1['item'];
            unset($parsed[$po1['key']]);
        }
        //Ctt loop
        $formatted['CTT'] = [];
        while($ctt = self::getParsedSegment('CTT', $parsed)){
            if(!empty($ctt['additionalItems'])){
                $formatted['CTT'][] = [$ctt['item'], $ctt['additionalItems']];
            }else $formatted['CTT'][] = $ctt['item'];
            unset($parsed[$ctt['key']]);
        }
        //Summary ending
        $sections = ['SE', 'GE', 'IEA'];
        foreach($sections as $section){
            $parsedSegment = self::getParsedSegment($section, $parsed);
            $formatted[$section] = array_merge($parsedSegment['item'], $parsedSegment['additionalItems']);
            if($formatted[$section]){
                unset($parsed[$parsedSegment['key']]);
            }
        }

        $formatted = array_merge($formatted, $parsed);

        return $formatted;
    }

    public static function getParsedSegment(string $segment, array &$parsed) {
        foreach($parsed as $key => $item) {
            if($item[Segment::EDI_QUALIFIER_KEY] == $segment){
                $additionalItems = [];
                //Gets additional segments that are grouped with the parent segment
                switch($segment){
                    case 'N9':
                        $additionalKey = $key + 1;
                        //Get other segments in this case MTX (may need to add more options)
                        while($parsed[$additionalKey] && $parsed[$additionalKey][Segment::EDI_QUALIFIER_KEY] === 'MTX'){
                            $additionalItems[] = $parsed[$additionalKey];
                            unset($parsed[$additionalKey]);
                            $additionalKey++;
                        }
                    break;
                    case 'N1':
                        $additionalKey = $key + 1;
                        //get other n segments but not n1
                        while($parsed[$additionalKey] && str_starts_with($parsed[$additionalKey][Segment::EDI_QUALIFIER_KEY], 'N') && !str_ends_with($parsed[$additionalKey][Segment::EDI_QUALIFIER_KEY], '1')){
                            $additionalItems[] = $parsed[$additionalKey];
                            unset($parsed[$additionalKey]);
                            $additionalKey++;
                        }
                    break;
                    case 'PO1':
                        $additionalKey = $key + 1;
                        $looping = true;
                        //get other po segments but not po1
                        while($parsed[$additionalKey] && $looping){
                            $childSegment = $parsed[$additionalKey][Segment::EDI_QUALIFIER_KEY];
                            switch($childSegment){
                                case 'PID':
                                case 'AMT':
                                case 'PO4':
                                    //Could be more than one PID, ATM, or PO4
                                    $additionalItems[$childSegment][] = $parsed[$additionalKey];
                                    unset($parsed[$additionalKey]);
                                    $additionalKey++;
                                break;
                                default:
                                    $looping = false;
                                break;
                            }
                        }
                    break;
                        case 'CTT':
                            $additionalKey = $key + 1;
                            //Get other segments in this case AMT
                            while($parsed[$additionalKey] && $parsed[$additionalKey][Segment::EDI_QUALIFIER_KEY] === 'AMT'){
                                $additionalItems[] = $parsed[$additionalKey];
                                unset($parsed[$additionalKey]);
                                $additionalKey++;
                            }
                        break;
                }
                return ['item' => $item, 'key' => $key, 'additionalItems' => $additionalItems];
            }
        }
        return null;
    }
}
