<?php

namespace Qooiz\BillingSDK\Constants;

/**
 * Class OperationTypeConstants
 *
 * @package Qooiz\BillingSDK\Constants
 */
class OperationTypeConstants
{
    public const TRANSFER = 'transfer';
    public const PAYMENT = 'payment';
    public const COMMISSION = 'commission';
    public const REFILL = 'refill';
    public const FUTURE_TRANSFER = 'future_transfer';
    public const FUTURE_TRANSFER_COMPLETE = 'future_transfer_complete';
    public const CANCEL = 'cancel';
    public const COMPLETE = 'complete';

    public const ALL_TYPES = [
        self::TRANSFER,
        self::PAYMENT,
        self::COMMISSION,
        self::REFILL,
        self::FUTURE_TRANSFER,
        self::FUTURE_TRANSFER_COMPLETE,
        self::CANCEL,
        self::COMPLETE,
    ];
}
