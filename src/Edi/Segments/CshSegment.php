<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class CshSegment
 * @package BrodSolutions\Edi\Segments
 */
class CshSegment extends Segment {
  public $segmentMapping = [
    0 => parent::EDI_QUALIFIER_KEY,
    1 => 'sales_requirement_code',
    2 => 'action_code',
    3 => 'amount',
    4 => 'account_number',
    5 => 'date',
    6 => 'agency_qualifier',
    7 => 'special_services_code',
    8 => 'substitution_code',
    9 => 'percent',
    10 => 'percent_qualifier',
  ];
}
