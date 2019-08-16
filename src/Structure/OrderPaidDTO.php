<?php

namespace Qooiz\BillingSDK\xxx;

/**
 * Class OrderPaidDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class OrderPaidDTO
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
     * @var bool
     */
    private $isTradePartnerDelivery;

    /**
     * @var mixed
     */
    private $deliveryAmount;

    /**
     * @var bool
     */
    private $isCashPayment;

    /**
     * @var string
     */
    private $currencyCode;

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
}
