<?php

namespace Qooiz\BillingSDK\Structure;

/**
 * Class PaginateStructure
 *
 * @package Qooiz\BillingSDK\Structure
 */
class PaginateStructure
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
     * @return PaginateStructure
     */
    public static function create(
        int $listSize,
        int $pageSize,
        int $currentPageNumber
    ) : PaginateStructure
    {
        $pageCount = ceil($listSize / $pageSize);

        $paginateStructure = new static();
        $paginateStructure->setFirst(1);
        $paginateStructure->setLast($pageCount);
        if ($currentPageNumber > 1 && $currentPageNumber <= $pageCount) {
            $paginateStructure->setPrev($currentPageNumber - 1);
        }

        $paginateStructure->setCurrent($currentPageNumber);
        if ($currentPageNumber < $pageCount) {
            $paginateStructure->setNext($currentPageNumber + 1);
        }

        $paginateStructure->setRowCount($listSize);

        return $paginateStructure;
    }
}
