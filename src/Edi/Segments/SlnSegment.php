<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class SlnSegment
 * @package BrodSolutions\Edi\Segments
 */
class SlnSegment extends Segment
{
  public $segmentMapping = [
    0 => parent::EDI_QUALIFIER_KEY,
    1 => 'identification',
    2 => 'identification_2',
    3 => 'relationship_code',
    4 => 'quantity',
    5 => 'unit_of_measure',
    6 => 'unit_price',
    7 => 'unit_price_code',
    8 => 'relationship_code_2',
    9 => 'product_id_qualifier',
    10 => 'product_id',
    11 => 'product_id_qualifier_2',
    12 => 'product_id_2',
    13 => 'product_id_qualifier_3',
    14 => 'product_id_3',
    15 => 'product_id_qualifier_4',
    16 => 'product_id_4',
    17 => 'product_id_qualifier_5',
    18 => 'product_id_5',
    19 => 'product_id_qualifier_6',
    20 => 'product_id_6',
    21 => 'product_id_qualifier_7',
    22 => 'product_id_7',
    23 => 'product_id_qualifier_8',
    24 => 'product_id_8',
    25 => 'product_id_qualifier_9',
    26 => 'product_id_9',
    27 => 'product_id_qualifier_10',
    28 => 'product_id_10',
  ];
}
