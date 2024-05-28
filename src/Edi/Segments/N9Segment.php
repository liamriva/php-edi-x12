<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class N9Segment
 * @package BrodSolutions\Edi\Segments
 */
class N9Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Reference Identification,
        1 => 'reference_identification_qualifier', //Code qualifying the Reference Identification
        2 => 'reference_identification', //Reference information as defined for a particular Transaction Set or as specified by the Reference Identification Qualifier
        3 => 'description', //Free-form description to clarify the related data elements and their content
        4 => 'date', //Date expressed as CCYYMMDD
        5 => 'time',
        6 => 'time_code', //Code specifying the time
    ];
}
