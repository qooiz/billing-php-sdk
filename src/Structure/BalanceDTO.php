<?php

namespace Qooiz\BillingSDK\xxx;

use Qooiz\BillingSDK\Constants\Constants;

/**
 * Class BalanceDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class BalanceDTO
{
    /** @var string */
    private $id;

    /** @var string */
    private $objectType;

    /** @var int */
    private $objectId;

    /** @var string */
    private $currencyCode;

    /** @var float */
    private $amount;

    /** @var string */
    private $type;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getObjectType() : ?string
    {
        return $this->objectType;
    }

    /**
     * @param string|null $objectType
     */
    public function setObjectType(?string $objectType) : void
    {
        $this->objectType = $objectType;
    }

    /**
     * @return int|null
     */
    public function getObjectId() : ?int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     */
    public function setObjectId(?int $objectId) : void
    {
        $this->objectId = $objectId;
    }

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
    public function getAccountType() : string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(string $accountType) : void
    {
        $this->accountType = $accountType;
    }

    /**
     * Returns amount rounded down
     *
     * @return float
     */
    public function getAmountFormatted() : float
    {
        return floor($this->getAmount() * Constants::BALANCE_MULTIPLIER) / Constants::BALANCE_MULTIPLIER;
    }
}
