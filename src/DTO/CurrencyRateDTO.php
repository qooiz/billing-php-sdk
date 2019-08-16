<?php

namespace Qooiz\BillingSDK\DTO;

use OpenApi\Annotations as SWG;
use Scaleplan\DTO\DTO;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CurrencyPairDTO
 *
 * @SWG\Definition(required={"source_code", "target_code", "rate"}, type="object", title="CurrencyPairDTO")
 */
final class CurrencyRateDTO extends DTO
{
    /**
     * @var float
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="float")
     * @Assert\GreaterThan(0)
     *
     *
     * @SWG\Property(property="rate", type="float")
     */
    private $rate;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string")
     *
     * @SWG\Property(property="source_code", type="string")
     */
    private $sourceCode;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string")
     *
     * @SWG\Property(property="target_code", type="string")
     */
    private $targetCode;

    /**
     * @return string
     */
    public function getSourceCode() : string
    {
        return $this->sourceCode;
    }

    /**
     * @param string $sourceCode
     */
    public function setSourceCode(string $sourceCode) : void
    {
        $this->sourceCode = $sourceCode;
    }

    /**
     * @return string
     */
    public function getTargetCode() : string
    {
        return $this->targetCode;
    }

    /**
     * @param string $targetCode
     */
    public function setTargetCode(string $targetCode) : void
    {
        $this->targetCode = $targetCode;
    }

    /**
     * @return float
     */
    public function getRate() : float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate(float $rate) : void
    {
        $this->rate = $rate;
    }
}
