<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class Q2Segment
 * @package BrodSolutions\Edi\Segments
 */
class Q2Segment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Carrier Details (Routing Sequence/Transit Time),
        1 => 'vessel_code', //Code identifying vessel
        2 => 'country_code',
        3 => 'pier_date',//Q203 is the required pier date. The pier date is the date the vessel is scheduled to arrive at the pier.
        4 => 'sailing_date', //Scheduled Sailing Date
        5 => 'discharge_date', // Scheduled Discharge Date
        6 => 'lading_quantity', // Number of units (pieces) of the lading commodity
        7 => 'weight',
        8 => 'weight_qualifier',
        9 => 'flight_voyage_number', //Identifying designator for the particular flight or voyage on which the cargo travels,
        10 => 'reference_identification_qualifier', //Code qualifying the Reference Identification
        11 => 'reference_identification',
        12 => 'vessel_code_qualifier', // Code specifying vessel code source,
        13 => 'vessel_name', // Name of ship as documented in "Lloyd's Register of Ships"
        14 => 'volume',//
        15 => 'volume_unit',
        16 => 'weight_unit_code', // Code specifying the weight unit
    ];
}
