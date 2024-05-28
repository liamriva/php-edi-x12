<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class N2Segment
 * @package BrodSolutions\Edi\Segments
 */
class N2Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Additional Name Information
        1 => 'name', //Free-form name
        2 => 'name_2' //Free-form name
    ];
}
