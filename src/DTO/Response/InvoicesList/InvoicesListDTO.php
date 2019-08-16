<?php

namespace AppBundle\DTO\Response\InvoicesList;

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
    public function getDate() : string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date) : void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getSourceObjectType() : ?string
    {
        return $this->sourceObjectType;
    }

    /**
     * @param string|null $sourceObjectType
     */
    public function setSourceObjectType(?string $sourceObjectType) : void
    {
        $this->sourceObjectType = $sourceObjectType;
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
     * @return string|null
     */
    public function getTargetObjectType() : ?string
    {
        return $this->targetObjectType;
    }

    /**
     * @param string $targetObjectType
     */
    public function setTargetObjectType(string $targetObjectType) : void
    {
        $this->targetObjectType = $targetObjectType;
    }

    /**
     * @return int|null
     */
    public function getTargetObjectId() : ?int
    {
        return $this->targetObjectId;
    }

    /**
     * @param int $targetObjectId
     */
    public function setTargetObjectId(int $targetObjectId) : void
    {
        $this->targetObjectId = $targetObjectId;
    }

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type) : void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getOrderId() : ?int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId(?int $orderId) : void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string|null
     */
    public function getOrderStatus() : ?string
    {
        return $this->orderStatus;
    }

    /**
     * @param mixed $orderStatus
     */
    public function setOrderStatus(?string $orderStatus) : void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string|null
     */
    public function getOrderCurrencyCode() : ?string
    {
        return $this->orderCurrencyCode;
    }

    /**
     * @param string|null $orderCurrencyCode
     */
    public function setOrderCurrencyCode(?string $orderCurrencyCode) : void
    {
        $this->orderCurrencyCode = $orderCurrencyCode;
    }

    /**
     * @return string|null
     */
    public function getTargetBalanceCurrencyCode() : ?string
    {
        return $this->targetBalanceCurrencyCode;
    }

    /**
     * @param string $targetBalanceCurrencyCode
     */
    public function setTargetBalanceCurrencyCode(string $targetBalanceCurrencyCode) : void
    {
        $this->targetBalanceCurrencyCode = $targetBalanceCurrencyCode;
    }

    /**
     * @return float|null
     */
    public function getTargetAmount() : ?float
    {
        return $this->targetAmount;
    }

    /**
     * @param float $targetAmount
     */
    public function setTargetAmount(float $targetAmount) : void
    {
        $this->targetAmount = $targetAmount;
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
     * @return float|null
     */
    public function getTargetBalanceAmount() : ?float
    {
        return $this->targetBalanceAmount;
    }

    /**
     * @param float $targetBalanceAmount
     */
    public function setTargetBalanceAmount(float $targetBalanceAmount) : void
    {
        $this->targetBalanceAmount = $targetBalanceAmount;
    }

    /**
     * @return string|null
     */
    public function getTargetBalanceAccountType() : ?string
    {
        return $this->targetBalanceAccountType;
    }

    /**
     * @param string $targetBalanceAccountType
     */
    public function setTargetBalanceAccountType(string $targetBalanceAccountType) : void
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
     * @param string $targetBalanceType
     */
    public function setTargetBalanceType(string $targetBalanceType) : void
    {
        $this->targetBalanceType = $targetBalanceType;
    }

    /**
     * @return string|null
     */
    public function getBuyerObjectType() : ?string
    {
        return $this->buyerObjectType;
    }

    /**
     * @param string|null $buyerObjectType
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
     * @return float|null
     */
    public function getSourceAmount() : ?float
    {
        return $this->sourceAmount;
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
}
