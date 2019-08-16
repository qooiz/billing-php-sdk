<?php

namespace Qooiz\BillingSDK\DTO;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class BalanceRefillOrChargeOffRequestDTO
 * @package AppBundle\DTO
 *
 * @SWG\Definition(required={"object_type", "object_id", "currency_code", "amount", "transaction_token", "description"},
 *                 type="object", title="BalanceRefillOrChargeOffRequestDTO")
 */
class BalanceRefillOrChargeOffRequestDTO extends DTO
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(property="transaction_token", type="string", example="test")
     */
    private $transactionToken;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Choice(
     *     strict=true,
     *     choices=\AppBundle\Constants\ObjectTypes::ALL_TYPES
     * )
     *
     * @SWG\Property(property="object_type", type="string", enum=\AppBundle\Constants\ObjectTypes::ALL_TYPES)
     */
    private $objectType;

    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="int", groups={"type"})
     *
     * @SWG\Property(property="object_id", type="int", example=1)
     */
    private $objectId;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(property="currency_code", type="string")
     */
    private $currencyCode;

    /**
     * @var float
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="float", groups={"type"})
     * @Assert\GreaterThanOrEqual(0.0001)
     *
     * @SWG\Property(property="amount", type="float", description="Any float value", example=0.01)
     */
    private $amount;

    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\NotBlank()
     *
     * @SWG\Property(property="description", type="string", example="test")
     */
    private $description;

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
     * @param $objectId
     */
    public function setObjectId($objectId) : void
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
     * @param $amount
     */
    public function setAmount($amount) : void
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
    public function setTransactionToken($transactionToken) : void
    {
        $this->transactionToken = $transactionToken;
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
