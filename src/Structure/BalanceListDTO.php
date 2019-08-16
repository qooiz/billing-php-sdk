<?php

namespace Qooiz\BillingSDK\xxx;

/**
 * Class BalanceListDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class BalanceListDTO
{
    /**
     * @var string|null
     */
    private $objectType;

    /**
     * @var int|null
     */
    private $objectId;

    /**
     * @var BalanceBriefDTO[]|null
     */
    private $balances;

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
     * @param int $objectId
     */
    public function setObjectId(?int $objectId) : void
    {
        $this->objectId = $objectId;
    }

    /**
     * @return BalanceBriefDTO[]
     */
    public function getBalances() : ?array
    {
        return $this->balances;
    }

    /**
     * @param BalanceBriefDTO $balanceBrief
     */
    public function addBalance(?BalanceBriefDTO $balanceBrief) : void
    {
        $this->balances[] = $balanceBrief;
    }
}
