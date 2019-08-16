<?php

namespace Qooiz\BillingSDK\Constants;

/**
 * Class BalanceTypeConstants
 *
 * @package Qooiz\BillingSDK\Constants
 */
class BalanceTypeConstants
{
    public const CURRENT = 'current';

    public const AWAITING = 'awaiting';

    public const SUSPENDED = 'suspended';

    public const WRITE_OFF = 'write_off';

    public const ALL = [
        self::CURRENT,
        self::AWAITING,
        self::SUSPENDED,
        self::WRITE_OFF,
    ];
}
