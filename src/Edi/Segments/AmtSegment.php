<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class AmtSegment
 * @package BrodSolutions\Edi\Segments
 */
class AmtSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To specify basic and most frequently used line item data
        1 => 'amount_qualifier', //Code to qualify amount
        2 => 'amount', //Monetary Amount
    ];
}
