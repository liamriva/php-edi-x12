<?php

namespace Mrstroz\Edi\Segments;

use Mrstroz\Edi\Segment;

/**
 * Class IeaSegment
 * @package Mrstroz\Edi\Segments
 */
class ItdSegment extends Segment
{
    public $segmentMapping = [
        0 => parent::EDI_QUALIFIER_KEY, //To specify terms of sale
        1 => 'term_type_code', //Code identifying type of payment terms
        2 => 'date_code', //Code identifying the beginning of the terms period
        3 => 'discount', //Terms discount percentage, expressed as a percent,
        4 => 'discount_due_date', //Date payment is due if discount is to be earned expressed in format CCYYMMDD where CC represents the first two digits of the calendar year
        5 => 'discount_days_due', //Number of days in the terms discount period by which payment is due if terms discount is earned
        6 => 'net_due_date', //Date when total invoice amount becomes due expressed in format CCYYMMDD where CC represents the first two digits of the calendar year
        7 => 'net_days_due', //Number of days until total invoice amount is due (discount not applicable)
        8 => 'discount_amount', //Total amount of terms discount
        9 => 'deferred_due_date', //Date deferred payment or percent of invoice payable is due expressed in format CCYYMMDD where CC represents the first two digits of the calendar year
        10 => 'deferred_amount_due', //Deferred amount due for payment
        11 => 'invoice_payable_percent', //Amount of invoice payable expressed in percent
        12 => 'description', //A free-form description to clarify the related data elements and their content
        13 => 'day_of_month', //The numeric value of the day of the month between 1 and the maximum day of the month being referenced
        14 => 'payment_type_code', //Code identifying type of payment procedures
        15 => 'percent_as_decimal' //Percentage expressed as a decimal
    ];
}
