<?php

namespace Qooiz\BillingSDK\DTO;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class BalanceRequestDTO
 * @package AppBundle\DTO
 *
 * @SWG\Definition(required={"object_type", "object_id"},
 *                 type="object", title="BalanceRequestDTO")
 */
class BalanceRequestDTO extends DTO
{
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
     *
     */
    private $objectType;

    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="int")
     *
     * @SWG\Property(property="object_id", type="int", example=1)
     */
    private $objectId;

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
    public function setObjectType($objectType)
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
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    }
}
