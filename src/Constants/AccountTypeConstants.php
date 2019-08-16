<?php

namespace Qooiz\BillingSDK\Constants;

/**
 * Class AccountTypeConstants
 *
 * @package Qooiz\BillingSDK\Constants
 */
class AccountTypeConstants
{
    public const PERSONAL = 'personal';

    public const STRUCTURE = 'structure';

    public const PRIZE = 'prize';

    public const ALL = [
        self::PRIZE,
        self::STRUCTURE,
        self::PERSONAL,
    ];
}
