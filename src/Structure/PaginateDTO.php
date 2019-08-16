<?php

namespace Qooiz\BillingSDK\xxx;

/**
 * Class PaginateDTO
 *
 * @package Qooiz\BillingSDK\DTO
 */
class PaginateDTO
{
    /**
     * @var int
     */
    private $first;

    /**
     * @var int
     */
    private $last;

    /**
     * @var int|null
     */
    private $prev;

    /**
     * @var int
     */
    private $current;

    /**
     * @var int|null
     */
    private $next;

    /**
     * @var int
     */
    private $rowCount;

    /**
     * @return int
     */
    public function getFirst() : ?int
    {
        return $this->first;
    }

    /**
     * @param int $first
     */
    public function setFirst(?int $first) : void
    {
        $this->first = $first;
    }

    /**
     * @return int
     */
    public function getLast() : ?int
    {
        return $this->last;
    }

    /**
     * @param int $last
     */
    public function setLast(?int $last) : void
    {
        $this->last = $last;
    }

    /**
     * @return int|null
     */
    public function getPrev() : ?int
    {
        return $this->prev;
    }

    /**
     * @param int $prev
     */
    public function setPrev(?int $prev) : void
    {
        $this->prev = $prev;
    }

    /**
     * @return int
     */
    public function getCurrent() : ?int
    {
        return $this->current;
    }

    /**
     * @param int $current
     */
    public function setCurrent(?int $current) : void
    {
        $this->current = $current;
    }

    /**
     * @return int|null
     */
    public function getNext() : ?int
    {
        return $this->next;
    }

    /**
     * @param int $next
     */
    public function setNext(?int $next) : void
    {
        $this->next = $next;
    }

    /**
     * @return int
     */
    public function getRowCount() : ?int
    {
        return $this->rowCount;
    }

    /**
     * @param int $rowCount
     */
    public function setRowCount(?int $rowCount) : void
    {
        $this->rowCount = $rowCount;
    }

    /**
     * @param int $listSize
     * @param int $pageSize
     * @param int $currentPageNumber
     *
     * @return PaginateDTO
     */
    public static function create(
        int $listSize,
        int $pageSize,
        int $currentPageNumber
    ) : PaginateDTO
    {
        $pageCount = ceil($listSize / $pageSize);

        $paginateDTO = new static();
        $paginateDTO->setFirst(1);
        $paginateDTO->setLast($pageCount);
        if ($currentPageNumber > 1 && $currentPageNumber <= $pageCount) {
            $paginateDTO->setPrev($currentPageNumber - 1);
        }

        $paginateDTO->setCurrent($currentPageNumber);
        if ($currentPageNumber < $pageCount) {
            $paginateDTO->setNext($currentPageNumber + 1);
        }

        $paginateDTO->setRowCount($listSize);

        return $paginateDTO;
    }
}
