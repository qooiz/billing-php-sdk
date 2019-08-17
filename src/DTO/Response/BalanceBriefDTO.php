<?php

namespace Qooiz\BillingSDK\DTO\Response;

use Qooiz\BillingSDK\Constants\Constants;

/**
 * Class BalanceBriefDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class BalanceBriefDTO
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
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param string|null $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode) : void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }

    /**
     * @param float|null $amount
     */
    public function setAmount(?float $amount) : void
    {
        $this->amount = $amount;
    }

    /**
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAccountType() : ?string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(?string $accountType) : void
    {
        $this->accountType = $accountType;
    }

    /**
     * Returns amount rounded down
     *
     * @return float
     */
    public function getAmountFormatted() : ?float
    {
        return floor($this->getAmount() * Constants::BALANCE_MULTIPLIER) / Constants::BALANCE_MULTIPLIER;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUpdatedAt() : ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeImmutable $updatedAt
     */
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt) : void
    {
        $this->updatedAt = $updatedAt;
    }
}
