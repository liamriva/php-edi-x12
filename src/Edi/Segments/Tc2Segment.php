<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class Tc2Segment
 * @package BrodSolutions\Edi\Segments
 */
class Tc2Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Carrier Details (Quantity and Weight)
        1 => 'commodity_code_qualifier', //Code identifying the commodity coding system used for Commodity Code
        2 => 'commodity_code', //Code describing a commodity or group of commodities
    ];
}
