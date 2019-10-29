<?php

namespace Qooiz\BillingSDK\DTO\Response;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;

/**
 * Class InvoicesListDTO
 *
 * @SWG\Definition(type="object", title="InvoicesListDTO")
 */
final class InvoicesListDTO extends DTO
{
    /**
     * @var string
     *
     * @SWG\Property(property="date", type="string", description="Date of invoice")
     */
    private $date;

    /**
     * @var string
     *
     * @SWG\Property(property="source_object_type", type="string", description="Source object type")
     */
    private $sourceObjectType;

    /**
     * @var int
     *
     * @SWG\Property(property="source_object_id", type="int", description="Source object id")
     */
    private $sourceObjectId;

    /**
     * @var string
     *
     * @SWG\Property(property="target_object_type", type="string", description="Target object type")
     */
    private $targetObjectType;

    /**
     * @var int
     *
     * @SWG\Property(property="target_object_id", type="int", description="Target object id")
     */
    private $targetObjectId;

    /**
     * @var string
     *
     * @SWG\Property(property="type", type="string", description="Type of invoice")
     */
    private $type;

    /**
     * @SWG\Property(property="order_id", type="int", description="Order id from event orders")
     */
    private $orderId;

    /**
     * @SWG\Property(property="order_status", type="string", description="Order status from event orders")
     */
    private $orderStatus;

    /**
     * @SWG\Property(property="order_currency_code", type="string", description="Currency code of order")
     */
    private $orderCurrencyCode;

    /**
     * @SWG\Property(property="amount", type="float", description="Target amount of invoice", example=100.00)
     */
    private $targetAmount;

    /**
     * @SWG\Property(property="order_amount", type="float", description="Amount in order currency", example=100.00)
     */
    private $orderAmount;

    /**
     * @SWG\Property(property="source_amount", type="float", description="Source amount of invoice", example=100.00)
     */
    private $sourceAmount;

    /**
     * @SWG\Property(
     *     property="source_balance_currency_code",
     *     type="string",
     *     description="Currency code of source balance"
     * )
     */
    private $sourceBalanceCurrencyCode;

    /**
     * @SWG\Property(
     *     property="source_balance_amount",
     *     type="float",
     *     description="Amount of source balance",
     *     example=100.00
     * )
     */
    private $sourceBalanceAmount;

    /**
     * @SWG\Property(property="source_balance_account_type", type="string",
     *     description="Source balance account type", example="personal"
     * )
     */
    private $sourceBalanceAccountType;

    /**
     * @SWG\Property(
     *     property="source_balance_type",
     *     type="string",
     *     description="Source balance type",
     *     example="current"
     * )
     */
    private $sourceBalanceType;

    /**
     * @SWG\Property(property="balance_currency_code", type="string", description="Currency code of target balance")
     */
    private $targetBalanceCurrencyCode;

    /**
     * @SWG\Property(property="balance_amount", type="float", description="Amount of target balance", example=100.00)
     */
    private $targetBalanceAmount;

    /**
     * @SWG\Property(property="balance_account_type", type="string",
     *     description="Target balance account type", example="personal"
     * )
     */
    private $targetBalanceAccountType;

    /**
     * @SWG\Property(property="balance_type", type="string", description="Target balance type", example="current")
     */
    private $targetBalanceType;

    /**
     * @SWG\Property(property="buyer_object_type", type="string",
     *     description="Buyer object type (event order object type)", example="consumer"
     * )
     */
    private $buyerObjectType;

    /**
     * @SWG\Property(property="buyer_object_id", type="int",
     *     description="Buyer object id (event order object id)", example=123
     * )
     */
    private $buyerObjectId;

    /**
     * @SWG\Property(property="description", type="string", description="Invoice description")
     */
    private $description = '';

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date) : void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getSourceObjectType()
    {
        return $this->sourceObjectType;
    }

    /**
     * @param string|null $sourceObjectType
     */
    public function setSourceObjectType($sourceObjectType) : void
    {
        $this->sourceObjectType = $sourceObjectType;
    }

    /**
     * @return int|null
     */
    public function getSourceObjectId()
    {
        return $this->sourceObjectId;
    }

    /**
     * @param int|null $sourceObjectId
     */
    public function setSourceObjectId($sourceObjectId) : void
    {
        $this->sourceObjectId = $sourceObjectId;
    }

    /**
     * @return string|null
     */
    public function getTargetObjectType()
    {
        return $this->targetObjectType;
    }

    /**
     * @param string $targetObjectType
     */
    public function setTargetObjectType($targetObjectType) : void
    {
        $this->targetObjectType = $targetObjectType;
    }

    /**
     * @return int|null
     */
    public function getTargetObjectId()
    {
        return $this->targetObjectId;
    }

    /**
     * @param int $targetObjectId
     */
    public function setTargetObjectId($targetObjectId) : void
    {
        $this->targetObjectId = $targetObjectId;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type) : void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId) : void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param mixed $orderStatus
     */
    public function setOrderStatus($orderStatus) : void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string|null
     */
    public function getOrderCurrencyCode()
    {
        return $this->orderCurrencyCode;
    }

    /**
     * @param string|null $orderCurrencyCode
     */
    public function setOrderCurrencyCode($orderCurrencyCode) : void
    {
        $this->orderCurrencyCode = $orderCurrencyCode;
    }

    /**
     * @return string|null
     */
    public function getTargetBalanceCurrencyCode()
    {
        return $this->targetBalanceCurrencyCode;
    }

    /**
     * @param string $targetBalanceCurrencyCode
     */
    public function setTargetBalanceCurrencyCode($targetBalanceCurrencyCode) : void
    {
        $this->targetBalanceCurrencyCode = $targetBalanceCurrencyCode;
    }

    /**
     * @return float|null
     */
    public function getTargetAmount()
    {
        return $this->targetAmount;
    }

    /**
     * @param float $targetAmount
     */
    public function setTargetAmount($targetAmount) : void
    {
        $this->targetAmount = $targetAmount;
    }

    /**
     * @return float|null
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * @param float|null $orderAmount
     */
    public function setOrderAmount($orderAmount) : void
    {
        $this->orderAmount = $orderAmount;
    }

    /**
     * @return float|null
     */
    public function getTargetBalanceAmount()
    {
        return $this->targetBalanceAmount;
    }

    /**
     * @param float $targetBalanceAmount
     */
    public function setTargetBalanceAmount($targetBalanceAmount) : void
    {
        $this->targetBalanceAmount = $targetBalanceAmount;
    }

    /**
     * @return string|null
     */
    public function getTargetBalanceAccountType()
    {
        return $this->targetBalanceAccountType;
    }

    /**
     * @param string $targetBalanceAccountType
     */
    public function setTargetBalanceAccountType($targetBalanceAccountType) : void
    {
        $this->targetBalanceAccountType = $targetBalanceAccountType;
    }

    /**
     * @return string|null
     */
    public function getTargetBalanceType()
    {
        return $this->targetBalanceType;
    }

    /**
     * @param string $targetBalanceType
     */
    public function setTargetBalanceType($targetBalanceType) : void
    {
        $this->targetBalanceType = $targetBalanceType;
    }

    /**
     * @return string|null
     */
    public function getBuyerObjectType()
    {
        return $this->buyerObjectType;
    }

    /**
     * @param string|null $buyerObjectType
     */
    public function setBuyerObjectType($buyerObjectType) : void
    {
        $this->buyerObjectType = $buyerObjectType;
    }

    /**
     * @return int|null
     */
    public function getBuyerObjectId()
    {
        return $this->buyerObjectId;
    }

    /**
     * @param int|null $buyerObjectId
     */
    public function setBuyerObjectId($buyerObjectId) : void
    {
        $this->buyerObjectId = $buyerObjectId;
    }

    /**
     * @return string|null
     */
    public function getSourceBalanceCurrencyCode()
    {
        return $this->sourceBalanceCurrencyCode;
    }

    /**
     * @param string|null $sourceBalanceCurrencyCode
     */
    public function setSourceBalanceCurrencyCode($sourceBalanceCurrencyCode) : void
    {
        $this->sourceBalanceCurrencyCode = $sourceBalanceCurrencyCode;
    }

    /**
     * @return float|null
     */
    public function getSourceBalanceAmount()
    {
        return $this->sourceBalanceAmount;
    }

    /**
     * @param float|null $sourceBalanceAmount
     */
    public function setSourceBalanceAmount($sourceBalanceAmount) : void
    {
        $this->sourceBalanceAmount = $sourceBalanceAmount;
    }

    /**
     * @return string|null
     */
    public function getSourceBalanceAccountType()
    {
        return $this->sourceBalanceAccountType;
    }

    /**
     * @param string|null $sourceBalanceAccountType
     */
    public function setSourceBalanceAccountType($sourceBalanceAccountType) : void
    {
        $this->sourceBalanceAccountType = $sourceBalanceAccountType;
    }

    /**
     * @return string|null
     */
    public function getSourceBalanceType()
    {
        return $this->sourceBalanceType;
    }

    /**
     * @param string|null $sourceBalanceType
     */
    public function setSourceBalanceType($sourceBalanceType) : void
    {
        $this->sourceBalanceType = $sourceBalanceType;
    }

    /**
     * @return float|null
     */
    public function getSourceAmount()
    {
        return $this->sourceAmount;
    }

    /**
     * @param float|null $sourceAmount
     */
    public function setSourceAmount($sourceAmount) : void
    {
        $this->sourceAmount = $sourceAmount;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription($description) : void
    {
        $this->description = $description;
    }
}
