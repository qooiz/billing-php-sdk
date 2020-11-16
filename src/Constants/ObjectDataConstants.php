<?php

namespace Qooiz\BillingSDK\Constants;

/**
 * Class ObjectDataConstants
 *
 * @package Qooiz\BillingSDK\Constants
 */
class ObjectDataConstants
{
    public const CONSUMER      = 'consumer';
    public const TRADE_PARTNER = 'trade_partner';
    public const SYSTEM        = 'system';

    public const ALL_TYPES = [
        self::CONSUMER,
        self::TRADE_PARTNER,
        self::SYSTEM,
    ];
}
