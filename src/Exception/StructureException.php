<?php

namespace Qooiz\BillingSDK\Exception;

/**
 * Class StructureException
 *
 * This exception throws if structure of api response doesn`t correspond our expectations
 *
 * @package Qooiz\BillingSDK\Exception
 */
class StructureException extends \RuntimeException
{
    public const MESSAGE = 'Billing response structure error.';

    /**
     * GridException constructor.
     *
     * @param string|null $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(string $message = null, int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message ?? static::MESSAGE, $code, $previous);
    }
}
