<?php

namespace BrodSolutions\Edi\Segments;

use BrodSolutions\Edi\Segment;

/**
 * Class BegSegment
 * @package BrodSolutions\Edi\Segments
 */
class BchSegment extends Segment
{
  public $segmentMapping = [
    0 => parent::EDI_QUALIFIER_KEY, //ST represents the beginning segment of the purchase order.
    1 => 'transaction_purpose_code', //Transaction Set Purpose Code - 00 represents a new purchase order.
    2 => 'purchase_order_type_code', //Purchase Order Type Code - DS Dropship / SA Stand-alone Order
    3 => 'purchase_order_number',// Identifying number for Purchase Order assigned by the orderer/purchaser
    4 => 'release_number', //Number identifying a release against a Purchase Order previously placed by the parties involved in the transaction
    5 => 'change_sequence_number',
    6 => 'po_date', //Date of issuance
    7 => 'request_reference_number',
    8 => 'contract_number', //Contract Number - Identifying number for a contract or agreement
    9 => 'reference_identification',
    10 => 'sender_date',
    11 => 'current_date',
    12 => 'contract_type_code', //Contract Type Code - Code indicating the type of contract
    13 => 'security_level_code', //Security Level Code - Code indicating the level of security
    14 => 'acknowledgement_type', //Acknowledgement Type - Code indicating the type of acknowledgment being made
    15 => 'transaction_type_code', //Transaction Type Code - Code indicating the type of transaction
    16 => 'purchase_category',
  ];
}
