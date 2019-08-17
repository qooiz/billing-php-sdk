<?php

namespace Qooiz\BillingSDK\DTO;

use Scaleplan\DTO\DTO;

/**
 * Class BillingSearchDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class BillingSearchDTO extends DTO
{
    /**
     * @var array|null
     */
    private $where;

    /**
     * @var array|null
     */
    private $sort;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int|null
     */
    private $page;

    /**
     * @return array|null
     */
    public function getWhere() : ?array
    {
        return $this->where;
    }

    /**
     * @param array|null $where
     */
    public function setWhere(?array $where) : void
    {
        $this->where = $where;
    }

    /**
     * @return array|null
     */
    public function getSort() : ?array
    {
        return $this->sort;
    }

    /**
     * @param array|null $sort
     */
    public function setSort(?array $sort) : void
    {
        $this->sort = $sort;
    }

    /**
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit) : void
    {
        $this->limit = $limit;
    }

    /**
     * @return int|null
     */
    public function getPage() : ?int
    {
        return $this->page;
    }

    /**
     * @param int|null $page
     */
    public function setPage(?int $page) : void
    {
        $this->page = $page;
    }

    /**
     * @param string $key
     * @param $value
     */
    public function setWhereItem(string $key, $value) : void
    {
        $this->where[$key] = $value;
    }

    /**
     * @param $key
     *
     * @return mixed|null
     */
    public function getWhereItem($key)
    {
        return $this->where[$key] ?? null;
    }
}
