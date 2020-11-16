<?php

namespace Qooiz\BillingSDK\DTO\Response;

use Scaleplan\DTO\DTO;

/**
 * Class BalanceListDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class BalanceListDTO extends DTO
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
     * @param int $objectId
     */
    public function setObjectId($objectId) : void
    {
        $this->objectId = $objectId;
    }

    /**
     * @return BalanceBriefDTO[]
     */
    public function getBalances()
    {
        return $this->balances;
    }

    /**
     * @param BalanceBriefDTO $balanceBrief
     */
    public function addBalance($balanceBrief) : void
    {
        $this->balances[] = $balanceBrief;
    }
}
