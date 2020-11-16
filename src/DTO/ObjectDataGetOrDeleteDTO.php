<?php

namespace Qooiz\BillingSDK\DTO;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ObjectDataGetOrDeleteDTO
 * @package AppBundle\DTO
 *
 * @SWG\Definition(required={"object_type", "object_id"}, type="object", title="ObjectDataGetOrDeleteDTO")
 */
class ObjectDataGetOrDeleteDTO extends DTO
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
     * @SWG\Property(property="object_type", type="string", enum=\AppBundle\Constants\ObjectTypes::ALL_TYPES)
     */
    private $objectType;

    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="int")
     *
     * @SWG\Property(property="object_id", type="integer")
     */
    private $objectId;

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
}
