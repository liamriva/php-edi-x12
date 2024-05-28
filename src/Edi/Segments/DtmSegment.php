<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class DtmSegment
 * @package BrodSolutions\Edi\Segments
 */
class DtmSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To specify pertinent dates and times
        1 => 'date_qualifier', //Date/Time Qualifier
        2 => 'date', //Date - CCYYMMDD
        3 => 'time',
        4 => 'time_code',
    ];
}
