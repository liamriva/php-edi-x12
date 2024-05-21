<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class SacSegment
 * @package Mrstroz\Edi\Segments
 */
class SacSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Service, Promotion, Allowance, or Charge Information
        1 => 'indicator', //Allowance or Charge Indicator
        2 => 'code', //Service, Promotion, Allowance, or Charge Code,
        3 => 'agency_qualifier_code', //Agency Qualifier Code
        4 => 'agency_maintained_code', //Agency maintained code identifying the service, promotion, allowance, or charge
        5 => 'amount', //Monetary amount
        6 => 'charge_percent',//Code indicating on what basis allowance or charge percent is calculated
        7 => 'percent',//Percent given in decimal format
        8 => 'rate',//Rate expressed in the standard monetary denomination for the currency specified
        9 => 'measurement_code',//Code specifying the units in which a value is being expressed, or manner in which a measurement has been taken
        10 => 'quantity_1',//Quantity
        11 => 'quantity_2',//Quantity
        12 => 'handling_code',//Code indicating method of handling for an allowance or charge
        13 => 'reference_id', //Reference Identification
        14 => 'option_number', //A unique number identifying available promotion or allowance options when more than one is offered
        15 => 'description', //Description
        16 => 'language_code', //Code identifying the language
    ];
}
