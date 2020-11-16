<?php

namespace Qooiz\BillingSDK\Exception;

/**
 * Class ManagerInsufficientFundsException
 *
 * @package AppBundle\Exception\Managers
 */
class InsufficientFundsException extends BillingException
{
    public const MESSAGE = 'Insufficient funds.';
}
