<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class MsgSegment
 * @package Mrstroz\Edi\Segments
 */
class MtxSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Text
        1 => 'reference_code', //Code identifying the functional area or purpose for which the note applies
        2 => 'textual_data_1', //Textual data
        3 => 'textual_data_2', //Textual data
        4 => 'printer_carriage_control_code', //A field to be used for the control of the line feed of the receiving printer
        5 => 'number',//A generic number
        6 => 'language_code'//Code identifying the language used in the message text
    ];
}
