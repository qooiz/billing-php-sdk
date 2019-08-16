<?php

namespace AppBundle\DTO\Response\BalancesList;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;

/**
 * Class BalanceBriefDTO
 *
 * @package AppBundle\DTO\BalancesList
 *
 * @SWG\Definition(required={"currency_code", "amount", "type", "account_type"},
 *                 type="object", title="BalanceBriefDTO")
 */
class BalanceBriefDTO extends DTO
{
    /**
     * @var string
     *
     * @SWG\Property(property="updated_at", type="string")
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @SWG\Property(property="currency_code", type="string")
     */
    private $currencyCode;

    /**
     * @var string
     *
     * @SWG\Property(property="account_type", type="string")
     */
    private $accountType;

    /**
     * @var float
     *
     * @SWG\Property(property="amount", type="float")
     */
    private $amount;

    /**
     * @var string
     *
     * @SWG\Property(property="type", type="string")
     */
    private $type;

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAccountType() : string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(string $accountType) : void
    {
        $this->accountType = $accountType;
    }

    /**
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt) : void
    {
        $this->updatedAt = $updatedAt;
    }
}
