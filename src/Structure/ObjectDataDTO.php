<?php

namespace Qooiz\BillingSDK\xxx;

/**
 * Class ObjectDataDTO
 * @package Qooiz\BillingSDK\DTO
 */
class ObjectDataDTO
{
    /** @var int */
    private $id;

    /** @var string */
    private $objectType;

    /** @var int */
    private $objectId;

    /** @var float*/
    private $commissionToBonusRate;

    /** @var float */
    private $wellmaxCommissionRate;

    /** @var bool */
    private $isDefault;

    /**
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getObjectType() : ?string
    {
        return $this->objectType;
    }

    /**
     * @param string|null $objectType
     */
    public function setObjectType(?string $objectType) : void
    {
        $this->objectType = $objectType;
    }

    /**
     * @return int|null
     */
    public function getObjectId() : ?int
    {
        return $this->objectId;
    }

    /**
     * @param int|null$objectId
     */
    public function setObjectId(?int $objectId) : void
    {
        $this->objectId = $objectId;
    }

    /**
     * @return float|null
     */
    public function getCommissionToBonusRate() : ?float
    {
        return $this->commissionToBonusRate;
    }

    /**
     * @param float|null $commissionToBonusRate
     */
    public function setCommissionToBonusRate(?float $commissionToBonusRate) : void
    {
        $this->commissionToBonusRate = $commissionToBonusRate;
    }

    /**
     * @return float|null
     */
    public function getWellmaxCommissionRate() : ?float
    {
        return $this->wellmaxCommissionRate;
    }

    /**
     * @param float|null $wellmaxCommissionRate
     */
    public function setWellmaxCommissionRate(?float $wellmaxCommissionRate) : void
    {
        $this->wellmaxCommissionRate = $wellmaxCommissionRate;
    }

    /**
     * @return bool
     */
    public function isDefault() : ?bool
    {
        return $this->isDefault;
    }

    /**
     * @param bool $isDefault
     */
    public function setIsDefault(?bool $isDefault) : void
    {
        $this->isDefault = $isDefault;
    }
}
