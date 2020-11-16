<?php

namespace Qooiz\BillingSDK\DTO;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ChargeOffOrRefillPrepareDTO
 *
 * @package AppBundle\DTO
 *
 * @SWG\Definition(
 *     required={
 *          "object_type",
 *          "object_id",
 *          "currency_code",
 *          "amount",
 *          "transaction_token",
 *          "description"
 *     },
 *     type="object",
 *     title="ChargeOffOrRefillPrepareDTO"
 * )
 */
final class ChargeOffOrRefillPrepareDTO extends DTO
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string")
     * @Assert\Choice(
     *     strict=true,
     *     choices=\AppBundle\Constants\ObjectTypes::ALL_TYPES
     * )
     *
     * @SWG\Property(property="object_type", type="string", example="consumer")
     */
    private $objectType;

    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="integer")
     * @Assert\GreaterThan(0)
     *
     * @SWG\Property(property="object_id", type="integer", example=20)
     */
    private $objectId;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(property="currency_code", type="string" , example="USD")
     */
    private $currencyCode;

    /**
     * @var float
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="float")
     * @Assert\GreaterThanOrEqual(0.0001)
     *
     * @SWG\Property(property="amount", type="float", example=150.2)
     */
    private $amount;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string")
     *
     * @SWG\Property(property="transaction_token", type="string", example="test")
     */
    private $transactionToken;

    /**
     * @var string
     *
     * @Assert\Type(type="string")
     * @Assert\NotBlank()
     *
     * @SWG\Property(property="description", type="string", example="test")
     */
    private $description;

    /**
     * @return string
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     */
    public function setObjectType($objectType) : void
    {
        $this->objectType = $objectType;
    }

    /**
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     */
    public function setObjectId($objectId) : void
    {
        $this->objectId = $objectId;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode) : void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount) : void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getTransactionToken()
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) : void
    {
        $this->description = $description;
    }
}
