<?php

namespace Qooiz\BillingSDK\Constants;

/**
 * Class WhereConditions
 *
 * @package AppBundle\Constants
 */
class WhereConditions
{
    public const OR = 'or';
    public const AND = 'and';

    public const ALL = [
        self::OR,
        self::AND,
    ];
}
