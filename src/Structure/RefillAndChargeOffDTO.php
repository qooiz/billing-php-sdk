<?php


namespace Qooiz\BillingSDK\xxx;


class RefillAndChargeOffDTO
{
    /**
     * @var string
     */
    private $objectType;

    /**
     * @var int
     */
    private $objectId;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $transactionToken;

    /**
     * @var string|null
     */
    private $description;

    /** @var string|null */
    private $purposeType;

    /**
     * @return string
     */
    public function getObjectType() : string
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     */
    public function setObjectType(string $objectType) : void
    {
        $this->objectType = $objectType;
    }

    /**
     * @return int
     */
    public function getObjectId() : int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     */
    public function setObjectId(int $objectId) : void
    {
        $this->objectId = $objectId;
    }

    /**
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode(string $currencyCode) : void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount) : void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getTransactionToken() : string
    {
        return $this->transactionToken;
    }

    /**
     * @param string $transactionToken
     */
    public function setTransactionToken(string $transactionToken) : void
    {
        $this->transactionToken = $transactionToken;
    }

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }

    /**
     * @return null|string
     */
    public function getPurposeType() : ?string
    {
        return $this->purposeType;
    }

    /**
     * @param string $purposeType
     */
    public function setPurposeType(string $purposeType) : void
    {
        $this->purposeType = $purposeType;
    }
}
