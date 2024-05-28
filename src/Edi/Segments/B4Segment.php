<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class BegSegment
 * @package BrodSolutions\Edi\Segments
 */
class B4Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY,
        1 => 'special_handling_code',
        2 => 'inquiry_request_code',//Identifying number assigned by inquirer
        3 => 'shipment_status_code',
        4 => 'status_date',
        5 => 'status_time',
        6 => 'status_location',//Air shipment: Airport code for last reported status for a shipment
        7 => 'equipment_initial',//Equipment Initial
        8 => 'equipment_number',//Equipment Number
        9 => 'equipment_status_code',//Equipment Status Code
        10 => 'equipment_type_code',//Equipment Type Code
        11 => 'location_identifier',
        12 => 'location_qualifier',
        13 => 'equipment_number_check_digit',//Number which designates the check digit applied to a piece of equipment
    ];
}
