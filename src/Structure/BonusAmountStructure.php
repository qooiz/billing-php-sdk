<?php

namespace Qooiz\BillingSDK\Structure;

use Qooiz\BillingSDK\Constants\Constants;

/**
 * Class BonusAmountStructure
 *
 * @package Qooiz\BillingSDK\Structure
 */
class BonusAmountStructure
{
    /** @var float */
    private $amount;

    /**
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }

    /**
     * @param float|null $amount
     */
    public function setAmount(?float $amount) : void
    {
        $this->amount = $amount;
    }

    /**
     * Returns amount rounded down
     *
     * @return float
     */
    public function getAmountFormatted() : float
    {
        return floor($this->getAmount() * Constants::BALANCE_MULTIPLIER) / Constants::BALANCE_MULTIPLIER;
    }
}
