<?php

namespace Qooiz\BillingSDK\xxx;

/**
 * Class BalanceListDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class InvoicesListItemDTO
{
    /**
     * @var string|null
     */
    private $date;

    /**
     * @var int|null
     */
    private $sourceObjectId;

    /**
     * @var string|null
     */
    private $sourceObjectType;

    /**
     * @var int|null
     */
    private $targetObjectId;

    /**
     * @var string|null
     */
    private $targetObjectType;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var int|null
     */
    private $orderId;

    /**
     * @var float|null
     */
    private $orderAmount;

    /**
     * @var string|null
     */
    private $orderCurrencyCode;

    /**
     * @var string|null
     */
    private $orderStatus;

    /**
     * @var float|null
     */
    private $sourceAmount;

    /**
     * @var string|null
     */
    private $sourceBalanceCurrencyCode;

    /**
     * @var float|null
     */
    private $sourceBalanceAmount;

    /**
     * @var string|null
     */
    private $sourceBalanceAccountType;

    /**
     * @var string|null
     */
    private $sourceBalanceType;

    /**
     * @var float
     */
    private $targetAmount;

    /**
     * @var float|null
     */
    private $targetBalanceAmount;

    /**
     * @var string|null
     */
    private $targetBalanceCurrencyCode;

    /**
     * @var string|null
     */
    private $targetBalanceAccountType;

    /**
     * @var string|null
     */
    private $targetBalanceType;

    /**
     * @var string|null
     */
    private $buyerObjectType;

    /**
     * @var int|null
     */
    private $buyerObjectId;

    /**
     * @var string|null
     */
    private $purpose;

    /**
     * @var string|null
     */
    private $purposeType;

    /**
     * @var string
     */
    private $description;

    /**
     * @return null|string
     */
    public function getDate() : ?string
    {
        return $this->date;
    }

    /**
     * @param null|string $date
     */
    public function setDate(?string $date) : void
    {
        $this->date = $date;
    }

    /**
     * @return int|null
     */
    public function getSourceObjectId() : ?int
    {
        return $this->sourceObjectId;
    }

    /**
     * @param int|null $sourceObjectId
     */
    public function setSourceObjectId(?int $sourceObjectId) : void
    {
        $this->sourceObjectId = $sourceObjectId;
    }

    /**
     * @return null|string
     */
    public function getSourceObjectType() : ?string
    {
        return $this->sourceObjectType;
    }

    /**
     * @param null|string $sourceObjectType
     */
    public function setSourceObjectType(?string $sourceObjectType) : void
    {
        $this->sourceObjectType = $sourceObjectType;
    }

    /**
     * @return int|null
     */
    public function getTargetObjectId() : ?int
    {
        return $this->targetObjectId;
    }

    /**
     * @param int|null $targetObjectId
     */
    public function setTargetObjectId(?int $targetObjectId) : void
    {
        $this->targetObjectId = $targetObjectId;
    }

    /**
     * @return string|null
     */
    public function getTargetObjectType() : ?string
    {
        return $this->targetObjectType;
    }

    /**
     * @param string|null $targetObjectType
     */
    public function setTargetObjectType(?string $targetObjectType) : void
    {
        $this->targetObjectType = $targetObjectType;
    }

    /**
     * @return null|string
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     */
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }

    /**
     * @return float|null
     */
    public function getTargetAmount() : ?float
    {
        return $this->targetAmount;
    }

    /**
     * @param float|null $targetAmount
     */
    public function setTargetAmount(?float $targetAmount) : void
    {
        $this->targetAmount = $targetAmount;
    }

    /**
     * @return float
     */
    public function getTargetAmountFormatted() : float
    {
        return round($this->targetAmount, 2, PHP_ROUND_HALF_UP);
    }

    /**
     * @return int|null
     */
    public function getOrderId() : ?int
    {
        return $this->orderId;
    }

    /**
     * @param int|null $orderId
     */
    public function setOrderId(?int $orderId) : void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return float|null
     */
    public function getOrderAmount() : ?float
    {
        return $this->orderAmount;
    }

    /**
     * @param float|null $orderAmount
     */
    public function setOrderAmount(?float $orderAmount) : void
    {
        $this->orderAmount = $orderAmount;
    }

    /**
     * @return float
     */
    public function getOrderAmountFormatted() : float
    {
        return round($this->orderAmount, 2, PHP_ROUND_HALF_UP);
    }

    /**
     * @return null|string
     */
    public function getOrderCurrencyCode() : ?string
    {
        return $this->orderCurrencyCode;
    }

    /**
     * @param null|string $orderCurrencyCode
     */
    public function setOrderCurrencyCode(?string $orderCurrencyCode) : void
    {
        $this->orderCurrencyCode = $orderCurrencyCode;
    }

    /**
     * @return null|string
     */
    public function getOrderStatus() : ?string
    {
        return $this->orderStatus;
    }

    /**
     * @param null|string $orderStatus
     */
    public function setOrderStatus(?string $orderStatus) : void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return float|null
     */
    public function getTargetBalanceAmount() : ?float
    {
        return $this->targetBalanceAmount;
    }

    /**
     * @param float|null $targetBalanceAmount
     */
    public function setTargetBalanceAmount(?float $targetBalanceAmount) : void
    {
        $this->targetBalanceAmount = $targetBalanceAmount;
    }

    /**
     * @return float
     */
    public function getTargetBalanceAmountFormatted() : float
    {
        return round($this->targetBalanceAmount, 2, PHP_ROUND_HALF_UP);
    }

    /**
     * @return string|null
     */
    public function getTargetBalanceCurrencyCode() : ?string
    {
        return $this->targetBalanceCurrencyCode;
    }

    /**
     * @param string|null $targetBalanceCurrencyCode
     */
    public function setTargetBalanceCurrencyCode(?string $targetBalanceCurrencyCode) : void
    {
        $this->targetBalanceCurrencyCode = $targetBalanceCurrencyCode;
    }

    /**
     * @return string|null
     */
    public function getTargetBalanceAccountType() : ?string
    {
        return $this->targetBalanceAccountType;
    }

    /**
     * @param string|null $targetBalanceAccountType
     */
    public function setTargetBalanceAccountType(?string $targetBalanceAccountType) : void
    {
        $this->targetBalanceAccountType = $targetBalanceAccountType;
    }

    /**
     * @return string|null
     */
    public function getTargetBalanceType() : ?string
    {
        return $this->targetBalanceType;
    }

    /**
     * @param string|null $targetBalanceType
     */
    public function setTargetBalanceType(?string $targetBalanceType) : void
    {
        $this->targetBalanceType = $targetBalanceType;
    }

    /**
     * @return null|string
     */
    public function getBuyerObjectType() : ?string
    {
        return $this->buyerObjectType;
    }

    /**
     * @param null|string $buyerObjectType
     */
    public function setBuyerObjectType(?string $buyerObjectType) : void
    {
        $this->buyerObjectType = $buyerObjectType;
    }

    /**
     * @return int|null
     */
    public function getBuyerObjectId() : ?int
    {
        return $this->buyerObjectId;
    }

    /**
     * @param int|null $buyerObjectId
     */
    public function setBuyerObjectId(?int $buyerObjectId) : void
    {
        $this->buyerObjectId = $buyerObjectId;
    }

    /**
     * @return float|null
     */
    public function getSourceAmount() : ?float
    {
        return $this->sourceAmount;
    }

    /**
     * @return float
     */
    public function getSourceAmountFormatted() : float
    {
        return round($this->sourceAmount, 2, PHP_ROUND_HALF_UP);
    }

    /**
     * @param float|null $sourceAmount
     */
    public function setSourceAmount(?float $sourceAmount) : void
    {
        $this->sourceAmount = $sourceAmount;
    }

    /**
     * @return string|null
     */
    public function getSourceBalanceCurrencyCode() : ?string
    {
        return $this->sourceBalanceCurrencyCode;
    }

    /**
     * @param string|null $sourceBalanceCurrencyCode
     */
    public function setSourceBalanceCurrencyCode(?string $sourceBalanceCurrencyCode) : void
    {
        $this->sourceBalanceCurrencyCode = $sourceBalanceCurrencyCode;
    }

    /**
     * @return float|null
     */
    public function getSourceBalanceAmount() : ?float
    {
        return $this->sourceBalanceAmount;
    }

    /**
     * @return float
     */
    public function getSourceBalanceAmountFormatted() : float
    {
        return round($this->sourceBalanceAmount, 2, PHP_ROUND_HALF_UP);
    }

    /**
     * @param float|null $sourceBalanceAmount
     */
    public function setSourceBalanceAmount(?float $sourceBalanceAmount) : void
    {
        $this->sourceBalanceAmount = $sourceBalanceAmount;
    }

    /**
     * @return string|null
     */
    public function getSourceBalanceAccountType() : ?string
    {
        return $this->sourceBalanceAccountType;
    }

    /**
     * @param string|null $sourceBalanceAccountType
     */
    public function setSourceBalanceAccountType(?string $sourceBalanceAccountType) : void
    {
        $this->sourceBalanceAccountType = $sourceBalanceAccountType;
    }

    /**
     * @return string|null
     */
    public function getSourceBalanceType() : ?string
    {
        return $this->sourceBalanceType;
    }

    /**
     * @param string|null $sourceBalanceType
     */
    public function setSourceBalanceType(?string $sourceBalanceType) : void
    {
        $this->sourceBalanceType = $sourceBalanceType;
    }

    /**
     * @return string|null
     */
    public function getPurpose() : ?string
    {
        return $this->purpose;
    }

    /**
     * @param string|null $purpose
     */
    public function setPurpose(?string $purpose) : void
    {
        $this->purpose = $purpose;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description) : void
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
     * @param null|string $purposeType
     */
    public function setPurposeType(?string $purposeType) : void
    {
        $this->purposeType = $purposeType;
    }
}
