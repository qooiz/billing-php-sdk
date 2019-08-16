<?php

namespace Qooiz\BillingSDK\xxx;

/**
 * Class SettingDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class SettingDTO
{
    /** @var int */
    private $id;

    /** @var string */
    private $key;

    /** @var string */
    private $value;

    /** @var string */
    private $type;

    /** @var string */
    private $description;

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
    public function getKey() : ?string
    {
        return $this->key;
    }

    /**
     * @param string|null $key
     */
    public function setKey(?string $key) : void
    {
        $this->key = $key;
    }

    /**
     * @return string|int|float|array|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string|int|float|array|null $value
     */
    public function setValue($value) : void
    {
        $this->value = $value;
    }

    /**
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
}
