<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class CttSegment
 * @package Mrstroz\Edi\Segments
 */
class CurSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To specify the currency (dollars, pounds, francs, etc.) used in a transaction
        1 => 'entity_id_1', //Code identifying an organizational entity, a physical location, property or an individual
        2 => 'currency_code', //Code (Standard ISO) for country in whose currency the charges are specified
        3 => 'exchange_rate', //Rate of exchange of the currency specified in the currency code
        4 => 'entity_id_2', //Code identifying an organizational entity, a physical location, property or an individual
        5 => 'currency_code_2', //Code (Standard ISO) for country in whose currency the charges are specified
        6 => 'exchange_code', //Code identifying the market upon which the currency exchange rate is based
        7 => 'date_time', //Code specifying type of date or time, or both date and time
        8 => 'date', //Date expressed as CCYYMMDD where CC represents the first two digits of the calendar year
        9 => 'time', //Time expressed in 24-hour clock
    ];
}

