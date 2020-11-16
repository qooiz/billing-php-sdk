<?php

namespace Qooiz\BillingSDK\DTO;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SettingRequestDTO
 * @package AppBundle\DTO
 *
 * @SWG\Definition(required={"key", "value"}, type="object", title="SettingRequestDTO")
 */
class SettingRequestDTO extends DTO
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string")
     *
     * @SWG\Property(property="key", type="string")
     */
    private $key;

    /**
     * @var string|int|float|array
     *
     * @Assert\NotBlank()
     *
     * @SWG\Property(property="value", description="Any valid json")
     */
    private $value;

    /**
     * @return string
     */
    public function getKey() : ?string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key) : void
    {
        $this->key = $key;
    }

    /**
     * @return array|float|int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param array|float|int|string|object $value
     */
    public function setValue($value) : void
    {
        $this->value = $value;
    }
}
