<?php

namespace Qooiz\BillingSDK\DTO\Response;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;

/**
 * Class BalanceDTO
 * @package AppBundle\DTO
 *
 * @SWG\Definition(required={"id", "object_type", "object_id", "currency_code", "amount", "type"},
 *                 type="object", title="BalanceDTO")
 */
class BalanceResponseDTO extends DTO
{
    /**
     * @var string
     *
     * @SWG\Property(property="id", type="int")
     */
    private $id;

    /**
     * @var string
     *
     * @SWG\Property(property="object_type", description="Any valid json")
     */
    private $objectType;

    /**
     * @var int
     *
     * @SWG\Property(property="object_id", type="string")
     */
    private $objectId;

    /**
     * @var string
     *
     * @SWG\Property(property="currency_code", type="string")
     */
    private $currencyCode;

    /**
     * @var string
     *
     * @SWG\Property(property="account_type", type="string")
     */
    private $accountType;

    /**
     * @var float
     *
     * @SWG\Property(property="amount", type="float")
     */
    private $amount;

    /**
     * @var string
     *
     * @SWG\Property(property="type", type="string")
     */
    private $type;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id) : void
    {
        $this->id = $id;
    }

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
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType($accountType) : void
    {
        $this->accountType = $accountType;
    }
}
