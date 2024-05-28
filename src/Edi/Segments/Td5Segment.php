<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class Td5Segment
 * @package BrodSolutions\Edi\Segments
 */
class Td5Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Carrier Details (Routing Sequence/Transit Time),
        1 => 'routing_code',//Code describing the relationship of a carrier to a specific shipment movement
        2 => 'identification_code_qualifier',//Code designating the system/method of code structure used for Identification Code
        3 => 'identification_code',//Code identifying a party or other code
        4 => 'transportation_code', //Code specifying the method or type of transportation for the shipment
        5 => 'routing', //Free-form description of the routing or requested routing for shipment, or the originating carrier's identity
        6 => 'special_handling_code', //Code indicating the status of an order or shipment or the disposition of any difference
        7 => 'location_qualifier', //Code identifying type of location
        8 => 'location_identifier', //Code which identifies a specific location
        9 => 'transit_direction_code', //The point of origin and point of direction
        10 => 'transit_time', //Code specifying the value of time used to measure the transit time
        11 => 'service_level_code_1', //Code identifying the level of transportation service or the billing service offered by the transportation carrier
        12 => 'service_level_code_2', //Code identifying the level of transportation service or the billing service offered by the transportation carrier
        13 => 'service_level_code_3', //Code identifying the level of transportation service or the billing service offered by the transportation carrier
        14 => 'service_level_code_4', //Code identifying the level of transportation service or the billing service offered by the transportation carrier
        15 => 'country_code', //Code identifying the country
    ];
}
