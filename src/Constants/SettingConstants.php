<?php

namespace Qooiz\BillingSDK\Constants;

/**
 * Class SettingConstants
 *
 * @package Qooiz\BillingSDK\Constants
 */
class SettingConstants
{
    public const COEFFICIENT_COMMON           = 'coefficient_common';
    public const COMMISSION_TO_BONUS_RATE     = 'commission_to_bonus_rate';
    public const WELLMAX_COMMISSION_RATE      = 'wellmax_commission_rate';
    public const COEFFICIENTS_STRUCTURE       = 'coefficients_structure';
    public const COEFFICIENT_CURRENT_USER     = 'coefficient_current_user';
    public const COEFFICIENT_ANCESTOR_LEVEL_1 = 'coefficient_ancestor_level_1';
    public const COEFFICIENT_ANCESTOR_LEVEL_2 = 'coefficient_ancestor_level_2';
    public const BONUS_TRANSFER_COMMISSION    = 'bonus_transfer_commission';

    public const TYPE_BOOL   = 'boolean';
    public const TYPE_INT    = 'integer';
    public const TYPE_STRING = 'string';
    public const TYPE_FLOAT  = 'float';
    public const TYPE_ARRAY  = 'array';

    public const LABELS_TYPE = [
        self::TYPE_BOOL,
        self::TYPE_INT,
        self::TYPE_STRING,
        self::TYPE_FLOAT,
        self::TYPE_ARRAY,
    ];
}
