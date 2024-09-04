<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class Po1Segment
 * @package BrodSolutions\Edi\Segments
 */
class PocSegment extends Segment
{
  public $segmentMapping = [
    0 => parent::EDI_QUALIFIER_KEY, //Baseline Item Data
    1 => 'assigned_identification', //Assigned Identification - Alphanumeric characters assigned for differentiation within a transaction set - This is the line item number that must be returned on subsequent documents to Insight such as the 855, 856, 810 and 870.
    2 => 'change_code',
    3 => 'quantity_ordered', //Quantity Ordered
    4 => 'quantity_left',
    5 => 'unit_of_measure',
    6 => 'unit_price', //Unit Price -  Price per unit of product, service, commodity, etc.
    7 => 'basis_unit_price_code', //Basis of Unit Price Code - Code identifying the type of unit price for an item - CP Current Price (Subject to Change)
    8 => 'product_id_qualifier', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    9 => 'product_id', //Product/Service ID - Identifying number for a product or service
    10 => 'product_id_qualifier_2', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    11 => 'product_id_2', //Product/Service ID - Identifying number for a product or service
    12 => 'product_id_qualifier_3', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    13 => 'product_id_3', //Product/Service ID - Identifying number for a product or service
    14 => 'product_id_qualifier_4', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    15 => 'product_id_4', //Product/Service ID - Identifying number for a product or service
    16 => 'product_id_qualifier_5', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    17 => 'product_id_5', //Product/Service ID - Identifying number for a product or service
    18 => 'product_id_qualifier_6', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    19 => 'product_id_6', //Product/Service ID - Identifying number for a product or service
    20 => 'product_id_qualifier_7', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    21 => 'product_id_7', //Product/Service ID - Identifying number for a product or service
    22 => 'product_id_qualifier_8', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    23 => 'product_id_8', //Product/Service ID - Identifying number for a product or service
    24 => 'product_id_qualifier_9', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    25 => 'product_id_9', //Product/Service ID - Identifying number for a product or service
    26 => 'product_id_qualifier_10', //Qualifier for Product/Service ID - Code identifying the type/source of the descriptive number used in Product/Service ID (234) - BP Buyer's Part Number
    27 => 'product_id_10', //Product/Service ID - Identifying number for a product or service
  ];
}
