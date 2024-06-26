<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class CtbSegment
 * @package BrodSolutions\Edi\Segments
 */
class CtbSegment extends Segment
{
  public $segmentMapping = [
    0 => parent::EDI_QUALIFIER_KEY, //To specify basic and most frequently used line item data
    1 => 'conditions_qualifier',
    2 => 'description',
    3 => 'quantity_qualifier',
    4 => 'quantity',
    5 => 'amount_qualifier',
    6 => 'amount',
    7 => 'unit_of_measure',
  ];
}
