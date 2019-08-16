<?php

namespace Qooiz\BillingSDK\Constants;

/**
 * Class ObjectDataConstants
 *
 * @package Qooiz\BillingSDK\Constants
 */
class ObjectDataConstants
{
    public const DISTRIBUTOR   = 'distributor';
    public const TRADE_PARTNER = 'trade_partner';
    public const SYSTEM        = 'system';

    public const ALL_TYPES = [
        self::DISTRIBUTOR,
        self::TRADE_PARTNER,
        self::SYSTEM,
    ];
}
