<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class MsgSegment
 * @package BrodSolutions\Edi\Segments
 */
class MsgSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //Message Text
        1 => 'text', //Free-form message text
        2 => 'printer_carriage_control_code', //A field to be used for the control of the line feed of the receiving printer
        3 => 'number'//A generic number
    ];
}
