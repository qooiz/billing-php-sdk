<?php
declare(strict_types=1);

namespace Qooiz\BillingSDK\DTO\Response;

use Scaleplan\DTO\DTO;

/**
 * Class ObjectDataDTO
 * @package Qooiz\BillingSDK\DTO
 */
class ObjectDataDTO extends DTO
{
    /** @var int */
    private $id;

    /** @var string */
    private $objectType;

    /** @var int */
    private $objectId;

    /** @var float */
    private $commissionRate;

    /** @var bool */
    private $isDefault;

    /**
     * @return float
     */
    public function getCommissionRate()
    {
        return $this->commissionRate;
    }

    /**
     * @param float $commissionRate
     */
    public function setCommissionRate($commissionRate) : void
    {
        $this->commissionRate = $commissionRate;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId($id) : void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param string|null $objectType
     */
    public function setObjectType($objectType) : void
    {
        $this->objectType = $objectType;
    }

    /**
     * @return int|null
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param int|null$objectId
     */
    public function setObjectId($objectId) : void
    {
        $this->objectId = $objectId;
    }

    /**
     * @return bool
     */
    public function isDefault()
    {
        return $this->isDefault;
    }

    /**
     * @param bool $isDefault
     */
    public function setIsDefault($isDefault) : void
    {
        $this->isDefault = $isDefault;
    }
}
