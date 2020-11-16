<?php

namespace Qooiz\BillingSDK\Exception;

/**
 * Class PagesDoesNotExistException
 *
 * @package Qooiz\BillingSDK\Exception
 */
class PagesDoesNotExistException extends StructureException
{
    public const MESSAGE = 'Pages part does not exist in response.';
}
