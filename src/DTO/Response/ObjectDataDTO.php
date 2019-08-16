<?php

namespace Qooiz\BillingSDK\DTO\Response;

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

    /** @var float */
    private $commissionRate;

    /** @var bool */
    private $isDefault;

    /**
     * @return float
     */
    public function getCommissionRate() : float
    {
        return $this->commissionRate;
    }

    /**
     * @param float $commissionRate
     */
    public function setCommissionRate(float $commissionRate) : void
    {
        $this->commissionRate = $commissionRate;
    }

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
