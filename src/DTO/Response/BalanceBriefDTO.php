<?php

namespace Qooiz\BillingSDK\DTO\Response;

use Qooiz\BillingSDK\Constants\Constants;
use Scaleplan\DTO\DTO;

/**
 * Class BalanceBriefDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class BalanceBriefDTO extends DTO
{
    /**
     * @var string|null
     */
    private $currencyCode;

    /**
     * @var float|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $accountType;

    /**
     * @var \DateTimeImmutable|null
     */
    private $updatedAt;

    /**
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string|null $currencyCode
     */
    public function setCurrencyCode($currencyCode) : void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float|null $amount
     */
    public function setAmount($amount) : void
    {
        $this->amount = $amount;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType($type) : void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType($accountType) : void
    {
        $this->accountType = $accountType;
    }

    /**
     * Returns amount rounded down
     *
     * @return float
     */
    public function getAmountFormatted()
    {
        return floor($this->getAmount() * Constants::BALANCE_MULTIPLIER) / Constants::BALANCE_MULTIPLIER;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeImmutable $updatedAt
     */
    public function setUpdatedAt($updatedAt) : void
    {
        $this->updatedAt = $updatedAt;
    }
}
