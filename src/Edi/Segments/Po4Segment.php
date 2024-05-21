<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class Po1Segment
 * @package Mrstroz\Edi\Segments
 */
class Po4Segment extends Segment {
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Baseline Item Data
        1 => 'inner_containers', //The number of inner containers, or number of eaches if there are no inner containers, per outer container
        2 => 'size', //Size of supplier units in pack
        3 => 'measurement_code_1', //Code specifying the units in which a value is being expressed, or manner in which a measurement has been taken
        4 => 'package_code', //Code identifying the type of packaging
        5 => 'weight', //Code specifying the type of weight
        6 => 'gross_weight', //Numeric value of gross weight per pack
        7 => 'measurement_code_2',//Code specifying the units in which a value is being expressed, or manner in which a measurement has been taken
        8 => 'gross_volume', //Numeric value of gross volume per pack
        9 => 'measurement_code_3', //Code specifying the units in which a value is being expressed, or manner in which a measurement has been taken
    ];
}

