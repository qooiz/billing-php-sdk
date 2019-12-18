<?php
declare(strict_types=1);

namespace Qooiz\BillingSDK;

use Qooiz\BillingSDK\DTO\BalanceRefillOrChargeOffRequestDTO;
use Qooiz\BillingSDK\DTO\BalanceRequestDTO;
use Qooiz\BillingSDK\DTO\BillingSearchDTO;
use Qooiz\BillingSDK\DTO\ChargeOffOrRefillPrepareDTO;
use Qooiz\BillingSDK\DTO\ObjectDataGetOrDeleteDTO;
use Qooiz\BillingSDK\DTO\OrderDTO;
use Qooiz\BillingSDK\DTO\OrderPaidDTO;
use Qooiz\BillingSDK\DTO\Response\BalanceResponseDTO;
use Qooiz\BillingSDK\DTO\Response\ObjectDataDTO;
use Qooiz\BillingSDK\DTO\Response\SettingResponseDTO;
use Qooiz\BillingSDK\DTO\SettingRequestDTO;
use Qooiz\BillingSDK\DTO\TransactionTokenDTO;

/**
 * API wrapper for contracts of BillingAPI
 *
 * Documentation: http://billing.test.qooiz-develop.me/api/docs
 *
 * @package App\Lib
 */
interface BillingInterface
{
    /**
     * @param DTO\ObjectDataDTO $dto
     *
     * @return ObjectDataDTO
     */
    public function createObjectData(DTO\ObjectDataDTO $dto) : ObjectDataDTO;

    /**
     * @param DTO\ObjectDataDTO $dto
     *
     * @return ObjectDataDTO
     */
    public function updateObjectData(DTO\ObjectDataDTO $dto) : ObjectDataDTO;

    /**
     * @param ObjectDataGetOrDeleteDTO $dto
     */
    public function deleteObjectData(ObjectDataGetOrDeleteDTO $dto) : void;

    /**
     * @param ObjectDataGetOrDeleteDTO $dto
     *
     * @return ObjectDataDTO
     */
    public function getObjectData(ObjectDataGetOrDeleteDTO $dto) : ObjectDataDTO;

    /**
     * @return SettingResponseDTO[]
     */
    public function getAllSettings() : array;

    /**
     * @param SettingRequestDTO $dto
     *
     * @return SettingResponseDTO
     */
    public function updateSettings(SettingRequestDTO $dto) : SettingResponseDTO;

    /**
     * @param BalanceRequestDTO $dto
     *
     * @return BalanceResponseDTO[]
     */
    public function getBalances(BalanceRequestDTO $dto) : array;

    /**
     * @param BillingSearchDTO $dto
     *
     * @return array
     *
     * @throws \Exception
     */
    public function balancesList(BillingSearchDTO $dto) : array;

    /**
     * @param BillingSearchDTO $dto
     *
     * @return array
     */
    public function invoicesList(BillingSearchDTO $dto) : array;

    /**
     * @param OrderDTO $dto
     */
    public function createOrder(OrderDTO $dto) : void;

    /**
     * @param TransactionTokenDTO $dto
     */
    public function completedOrder(TransactionTokenDTO $dto) : void;

    /**
     * @param TransactionTokenDTO $dto
     */
    public function cancelOrder(TransactionTokenDTO $dto) : void;

    /**
     * Send if order paid
     *
     * @param OrderPaidDTO $dto
     */
    public function paidOrder(OrderPaidDTO $dto) : void;

    /**
     * Refill user or company current balance
     *
     * @param BalanceRefillOrChargeOffRequestDTO $dto
     */
    public function balanceRefill(BalanceRefillOrChargeOffRequestDTO $dto) : void;

    /**
     * @param BalanceRefillOrChargeOffRequestDTO $dto
     */
    public function balanceChargeOff(BalanceRefillOrChargeOffRequestDTO $dto) : void;

    /**
     * @param BalanceRefillOrChargeOffRequestDTO $dto
     */
    public function chargeOffPrepare(BalanceRefillOrChargeOffRequestDTO $dto) : void;

    /**
     * @param TransactionTokenDTO $dto
     */
    public function chargeOffComplete(TransactionTokenDTO $dto) : void;

    /**
     * @param TransactionTokenDTO $dto
     */
    public function chargeOffCancel(TransactionTokenDTO $dto) : void;

    /**
     * @param ChargeOffOrRefillPrepareDTO $dto
     */
    public function refillPrepare(ChargeOffOrRefillPrepareDTO $dto) : void;

    /**
     * @param TransactionTokenDTO $dto
     */
    public function refillComplete(TransactionTokenDTO $dto) : void;

    /**
     * @param TransactionTokenDTO $dto
     */
    public function refillReject(TransactionTokenDTO $dto) : void;
}
