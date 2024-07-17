<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class FobSegment
 * @package BrodSolutions\Edi\Segments
 */
class FobSegment extends Segment
{

    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //F.O.B. Related Instructions
        1 => 'shipment_method_of_payment', //Code identifying payment terms for transportation charges
        2 => 'location_qualifier', //Code identifying type of location
        3 => 'description', //Description
        4 => 'transportation_terms_qualifier', //Code identifying the source of the transportation terms
        5 => 'transportation_terms_code', //Code identifying the trade terms which apply to the shipment transportation responsibility
        6 => 'location_qualifier_2', //Code identifying type of location
        7 => 'description_2', //Description
        8 => 'risk_of_loss_code', //Code identifying the party responsible for the risk of loss
        9 => 'description_3', //Description
    ];
}
