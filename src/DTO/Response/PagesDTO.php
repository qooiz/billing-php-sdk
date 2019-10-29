<?php

namespace Qooiz\BillingSDK\DTO\Response;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;

/**
 * Class PagesDTO
 * @package AppBundle\DTO
 *
 * @SWG\Definition(required={"first", "last", "prev", "current", "next", "count"},
 *                 type="object", title="PagesDTO")
 */
class PagesDTO extends DTO
{
    /**
     * @var int
     *
     * @SWG\Property(property="first", type="integer")
     */
    private $first;

    /**
     * @var int
     *
     * @SWG\Property(property="last", type="integer")
     */
    private $last;

    /**
     * @var int|null
     *
     * @SWG\Property(property="prev", type="integer")
     */
    private $prev;

    /**
     * @var int
     *
     * @SWG\Property(property="current", type="integer")
     */
    private $current;

    /**
     * @var int|null
     *
     * @SWG\Property(property="next", type="integer")
     */
    private $next;

    /**
     * @var int
     *
     * @SWG\Property(property="row_count", type="integer")
     */
    private $rowCount;

    /**
     * @return int
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param int $first
     */
    public function setFirst($first) : void
    {
        $this->first = $first;
    }

    /**
     * @return int
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param int $last
     */
    public function setLast($last) : void
    {
        $this->last = $last;
    }

    /**
     * @return int|null
     */
    public function getPrev()
    {
        return $this->prev;
    }

    /**
     * @param int $prev
     */
    public function setPrev($prev) : void
    {
        $this->prev = $prev;
    }

    /**
     * @return int
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param int $current
     */
    public function setCurrent($current) : void
    {
        $this->current = $current;
    }

    /**
     * @return int|null
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param int $next
     */
    public function setNext($next) : void
    {
        $this->next = $next;
    }

    /**
     * @return int
     */
    public function getRowCount()
    {
        return $this->rowCount;
    }

    /**
     * @param int $rowCount
     */
    public function setRowCount($rowCount) : void
    {
        $this->rowCount = $rowCount;
    }
}
