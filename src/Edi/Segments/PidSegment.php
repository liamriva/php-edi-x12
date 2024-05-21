<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class PidSegment
 * @package Mrstroz\Edi\Segments
 */
class PidSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Product/Item Description
        1 => 'item_description_type', //Code indicating the format of a description
        2 => 'product_characteristic_code', //Code identifying the general class of a product or process characteristic
        3 => 'agency_qualifier_code', //Code identifying the agency assigning the code values
        4 => 'product_description_code',//A code from an industry code list which provides specific data about a product characteristic
        5 => 'description', //Description
        6 => 'position_code', //Code indicating the product surface, layer or position that is being described
        7 => 'source_sub_qualifier', //A reference that indicates the table or text maintained by the Source Qualifier
        8 => 'response_code', //Code indicating a Yes or No condition or response
        9 => 'language_code', //Code identifying the language
    ];
}
