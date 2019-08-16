<?php

namespace AppBundle\DTO\Response\BalancesList;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;

/**
 * Class BalanceListItemResponseDTO
 *
 * @package AppBundle\DTO\BalancesList
 *
 * @SWG\Definition(required={"object_type", "object_id", "balances"},
 *                 type="object", title="BalanceListItemResponseDTO")
 */
class BalanceListItemResponseDTO extends DTO
{
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
     * @var BalanceBriefDTO[]
     *
     * @SWG\Property(property="balances", type="array", items=@SWG\Items(ref="#/definitions/BalanceBriefDTO"))
     */
    private $balances;

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
     * @param int $objectId
     */
    public function setObjectId(int $objectId) : void
    {
        $this->objectId = $objectId;
    }

    /**
     * @return BalanceBriefDTO[]
     */
    public function getBalances() : array
    {
        return $this->balances;
    }

    /**
     * @param BalanceBriefDTO $balanceBriefDTO
     */
    public function addBalance(BalanceBriefDTO $balanceBriefDTO) : void
    {
        $this->balances[] = $balanceBriefDTO;
    }
}
