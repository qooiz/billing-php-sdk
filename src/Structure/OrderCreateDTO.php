<?php

namespace Qooiz\BillingSDK\xxx;

/**
 * Class OrderCreateDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
final class OrderCreateDTO
{
    /**
     * @var int
     */
    private $orderId;

    /**
     * @var int
     */
    private $tradePartnerId;

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
     * @var mixed
     */
    private $amount;

    /**
     * @var mixed
     */
    private $deliveryAmount;

    /**
     * @var bool|null
     */
    private $isTradePartnerDelivery;

    /**
     * @var bool
     */
    private $isCashPayment;

    /**
     * @var array
     */
    private $details;

    /**
     * @var string
     */
    private $description;

    /**
     * @return int
     */
    public function getOrderId() : int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId(int $orderId) : void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return int
     */
    public function getTradePartnerId() : int
    {
        return $this->tradePartnerId;
    }

    /**
     * @param int $tradePartnerId
     */
    public function setTradePartnerId(int $tradePartnerId) : void
    {
        $this->tradePartnerId = $tradePartnerId;
    }

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
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount) : void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAmount()
    {
        return $this->deliveryAmount;
    }

    /**
     * @param mixed $deliveryAmount
     */
    public function setDeliveryAmount($deliveryAmount) : void
    {
        $this->deliveryAmount = $deliveryAmount;
    }

    /**
     * @return bool
     */
    public function isTradePartnerDelivery() : bool
    {
        return $this->isTradePartnerDelivery;
    }

    /**
     * @param bool $isTradePartnerDelivery
     */
    public function setIsTradePartnerDelivery(bool $isTradePartnerDelivery) : void
    {
        $this->isTradePartnerDelivery = $isTradePartnerDelivery;
    }

    /**
     * @return array
     */
    public function getDetails() : array
    {
        return $this->details;
    }

    /**
     * @param array $details
     */
    public function setDetails(array $details) : void
    {
        $this->details = $details;
    }

    /**
     * @return bool
     */
    public function isCashPayment() : bool
    {
        return $this->isCashPayment;
    }

    /**
     * @param bool $isCashPayment
     */
    public function setIsCashPayment(bool $isCashPayment) : void
    {
        $this->isCashPayment = $isCashPayment;
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
}
