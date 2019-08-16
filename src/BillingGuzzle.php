<?php

namespace Qooiz\BillingSDK;

use Qooiz\BillingSDK\Constants\BalanceListConstants;
use Qooiz\BillingSDK\Constants\InvoicesListConstants;
use Qooiz\BillingSDK\DTO\BalanceRequestDTO;
use Qooiz\BillingSDK\DTO\ObjectDataGetOrDeleteDTO;
use Qooiz\BillingSDK\DTO\Response\BalanceResponseDTO;
use Qooiz\BillingSDK\DTO\Response\ObjectDataDTO;
use Qooiz\BillingSDK\DTO\Response\PagesDTO;
use Qooiz\BillingSDK\DTO\SettingRequestDTO;
use Qooiz\BillingSDK\DTO\Response\SettingResponseDTO;
use Qooiz\BillingSDK\Exception\ClientException;
use Qooiz\BillingSDK\Exception\PagesDoesNotExistException;
use Qooiz\BillingSDK\Exception\RemoteException;
use Qooiz\BillingSDK\Exception\StructureException;
use Qooiz\BillingSDK\Exception\TransportException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException as GuzzleClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;

/**
 * API wrapper for contracts of BillingAPI
 *
 * Documentation: http://45.63.116.71/api/docs
 *
 * @package App\Lib
 */
class BillingGuzzle implements BillingInterface
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * Billing API constructor
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param DTO\ObjectDataDTO $dto
     *
     * @return ObjectDataDTO
     */
    public function createObjectData(DTO\ObjectDataDTO $dto) : ObjectDataDTO
    {
        $resultData = $this->sendRequest('/object_data_create', $dto->toFullSnakeArray());

        $result = new ObjectDataDTO();
        $result->setObjectType($resultData['object_type'] ?? null);
        $result->setObjectId($resultData['object_id'] ?? null);
        $result->setCommissionRate($resultData['commission_rate'] ?? null);
        $result->setIsDefault($resultData['is_default'] ?? null);

        return $result;
    }

    /**
     * @param DTO\ObjectDataDTO $dto
     *
     * @return ObjectDataDTO
     */
    public function updateObjectData(DTO\ObjectDataDTO $dto) : ObjectDataDTO
    {
        $resultData = $this->sendRequest('/object_data_update', $dto->toFullSnakeArray());

        $result = new ObjectDataDTO();
        $result->setObjectType($resultData['object_type'] ?? null);
        $result->setObjectId($resultData['object_id'] ?? null);
        $result->setCommissionRate($resultData['commission_rate'] ?? null);
        $result->setIsDefault($resultData['is_default'] ?? null);

        return $result;
    }

    /**
     * @param ObjectDataGetOrDeleteDTO $dto
     */
    public function deleteObjectData(ObjectDataGetOrDeleteDTO $dto) : void
    {
        $this->sendRequest('/object_data_delete', $dto->toFullSnakeArray());
    }

    /**
     * @param ObjectDataGetOrDeleteDTO $dto
     *
     * @return ObjectDataDTO
     */
    public function getObjectData(ObjectDataGetOrDeleteDTO $dto) : ObjectDataDTO
    {
        $resultData = $this->sendRequest('/object_data_get', $dto->toFullSnakeArray());

        $result = new ObjectDataDTO();
        $result->setObjectType($resultData['object_type'] ?? null);
        $result->setObjectId($resultData['object_id'] ?? null);
        $result->setCommissionRate($resultData['commission_rate'] ?? null);
        $result->setIsDefault($resultData['is_default'] ?? null);
        return $result;
    }

    /**
     * @return SettingResponseDTO[]
     */
    public function getAllSettings() : array
    {
        $resultData = $this->sendRequest('/settings_get_all');

        $settings = [];
        foreach ($resultData as $record) {
            $result = new SettingResponseDTO();
            $result->setKey($record['key'] ?? null);
            $result->setValue($record['value'] ?? null);
            $result->setType($record['type'] ?? null);
            $result->setDescription($record['description'] ?? null);

            $settings[] = $result;
        }

        return $settings;
    }

    /**
     * @param SettingRequestDTO $dto
     *
     * @return SettingResponseDTO
     */
    public function updateSettings(SettingRequestDTO $dto) : SettingResponseDTO
    {
        $resultData = $this->sendRequest('/settings_update', $dto->toFullSnakeArray());

        $result = new SettingResponseDTO();
        $result->setKey($resultData['key'] ?? null);
        $result->setValue($resultData['value'] ?? null);
        $result->setType($resultData['type'] ?? null);
        $result->setDescription($resultData['description'] ?? null);

        return $result;
    }

    /**
     * @param BalanceRequestDTO $dto
     *
     * @return BalanceResponseDTO[]
     */
    public function getBalances(BalanceRequestDTO $dto) : array
    {
        $resultData = $this->sendRequest('/balances_get', $dto->toFullSnakeArray());

        $balances = [];
        foreach ($resultData as $record) {
            $result = new BalanceResponseDTO();
            $result->setObjectType($record['object_type'] ?? null);
            $result->setObjectId($record['object_id'] ?? null);
            $result->setCurrencyCode($record['currency_code'] ?? null);
            $result->setAccountType($record['account_type'] ?? null);
            $result->setAmount($record['amount'] ?? null);
            $result->setType($record['type'] ?? null);

            $balances[] = $result;
        }

        return $balances;
    }

    /**
     * @param array $resultData
     * @param int|null $current
     *
     * @return PagesDTO
     */
    private function getPages(array $resultData, int $current = null) : PagesDTO
    {
        if (empty($resultData['pages']) || !\is_array($resultData['pages'])) {
            throw new PagesDoesNotExistException();
        }

        $pages = new PagesDTO();
        $paginationData = $resultData['pages'];
        $pages->setFirst($paginationData['first'] ?? null);
        $pages->setLast($paginationData['last'] ?? null);
        $pages->setCurrent($paginationData['current'] ?? $current);
        $pages->setPrev($paginationData['prev'] ?? null);
        $pages->setNext($paginationData['next'] ?? null);
        $pages->setRowCount($paginationData['row_count'] ?? null);

        return $pages;
    }

    /**
     * Get balances list
     *
     * @param BillingSearchStructure $billingSearchStructure
     *
     * @return BalanceListStructure[]
     * @throws \Exception
     */
    public function balancesList(BillingSearchStructure $billingSearchStructure) : array
    {
        $url = '/api/v1/balances_list';
        $data = [
            'where' => $billingSearchStructure->getWhere(),
            'sort'  => $billingSearchStructure->getSort(),
            'page'  => $billingSearchStructure->getPage(),
            'limit' => $billingSearchStructure->getLimit(),
        ];

        $resultData = $this->sendRequestAll($url, $data);

        $balancesList = [];
        foreach ($resultData['result'] as $record) {
            $result = new BalanceListStructure();
            $result->setObjectType($record['object_type'] ?? null);
            $result->setObjectId($record['object_id'] ?? null);
            foreach ($record['balances'] ?? [] as $balance) {
                $balanceBrief = new BalanceBriefStructure();
                $balanceBrief->setType($balance['type'] ?? null);
                $balanceBrief->setAccountType($balance['account_type'] ?? null);
                $balanceBrief->setCurrencyCode($balance['currency_code'] ?? null);
                $balanceBrief->setAmount($balance['amount'] ?? null);
                $balanceBrief->setUpdatedAt(
                    $balance['updated_at'] ? new \DateTimeImmutable($balance['updated_at']) : null
                );

                $result->addBalance($balanceBrief);
            }

            $balancesList[] = $result;
        }

        $pages = $this->getPages($resultData);

        return [
            BalanceListConstants::BILLING_LIST_SECTION_NAME => $balancesList,
            BalanceListConstants::PAGES_SECTION             => $pages,
        ];
    }

    /**
     * Get invoices list
     *
     * @param BillingSearchStructure $billingSearchStructure
     *
     * @return array
     */
    public function invoicesList(BillingSearchStructure $billingSearchStructure) : array
    {
        $url = '/api/v2/invoices_list';
        $data = [
            'where' => $billingSearchStructure->getWhere(),
            'sort'  => $billingSearchStructure->getSort(),
            'page'  => $billingSearchStructure->getPage(),
            'limit' => $billingSearchStructure->getLimit(),
        ];

        $resultData = $this->sendRequestAll($url, $data);

        $invoicesList = [];
        foreach ($resultData['result'] as $record) {
            $result = new InvoicesListItemStructure();
            $result->setTargetAmount($record['target_amount'] ?? null);
            $result->setType($record['type'] ?? null);
            $result->setOrderId($record['order_id'] ?? null);
            $result->setTargetBalanceAccountType($record['target_balance_account_type'] ?? null);
            $result->setTargetBalanceAmount($record['target_balance_amount'] ?? null);
            $result->setTargetBalanceCurrencyCode($record['target_balance_currency_code'] ?? null);
            $result->setTargetBalanceType($record['target_balance_type'] ?? null);
            $result->setBuyerObjectId($record['buyer_object_id'] ?? null);
            $result->setBuyerObjectType($record['buyer_object_type'] ?? null);
            $result->setDate($record['date'] ?? null);
            $result->setOrderAmount($record['order_amount'] ?? null);
            $result->setOrderCurrencyCode($record['order_currency_code'] ?? null);
            $result->setOrderStatus($record['order_status'] ?? null);
            $result->setSourceObjectId($record['source_object_id'] ?? null);
            $result->setSourceObjectType($record['source_object_type'] ?? null);
            $result->setTargetObjectId($record['target_object_id'] ?? null);
            $result->setTargetObjectType($record['target_object_type'] ?? null);
            $result->setSourceAmount($record['source_amount'] ?? null);
            $result->setSourceBalanceAccountType($record['source_balance_account_type'] ?? null);
            $result->setSourceBalanceAmount($record['source_balance_amount'] ?? null);
            $result->setSourceBalanceCurrencyCode($record['source_balance_currency_code'] ?? null);
            $result->setSourceBalanceType($record['source_balance_type'] ?? null);
            $result->setPurpose($record['purpose'] ?? null);
            $result->setPurposeType($record['purpose_type'] ?? null);
            $result->setDescription($record['description'] ?? '&mdash;');

            $invoicesList[] = $result;
        }

        $pages = $this->getPages($resultData, $billingSearchStructure->getPage());

        return [
            InvoicesListConstants::INVOICES_LIST_SECTION_NAME => $invoicesList,
            InvoicesListConstants::PAGES_SECTION_NAME         => $pages,
        ];
    }

    /**
     * Create order
     *
     * @param OrderCreateStructure $orderCreateStructure
     */
    public function createOrder(OrderCreateStructure $orderCreateStructure) : void
    {
        $url = '/api/v1/order_create';
        $data = [
            'order_id'                  => $orderCreateStructure->getOrderId(),
            'trade_partner_id'          => $orderCreateStructure->getTradePartnerId(),
            'object_type'               => $orderCreateStructure->getObjectType(),
            'object_id'                 => $orderCreateStructure->getObjectId(),
            'currency_code'             => $orderCreateStructure->getCurrencyCode(),
            'amount'                    => (float)$orderCreateStructure->getAmount(),
            'delivery_amount'           => (float)$orderCreateStructure->getDeliveryAmount(),
            'is_trade_partner_delivery' => $orderCreateStructure->isTradePartnerDelivery(),
            'is_cash_payment'           => $orderCreateStructure->isCashPayment(),
            'details'                   => $orderCreateStructure->getDetails(),
            'description'               => $orderCreateStructure->getDescription(),
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Completed order
     *
     * @param int $orderId
     *
     * @return mixed|void
     *
     * @throws StructureException
     * @throws ClientException
     * @throws RemoteException
     * @throws TransportException
     */
    public function completedOrder(int $orderId) : void
    {
        $url = '/api/v1/order_completed';
        $data = [
            'order_id' => $orderId,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Cancel order
     *
     * @param int $orderId
     *
     * @return mixed|void
     *
     * @throws StructureException
     * @throws ClientException
     * @throws RemoteException
     * @throws TransportException
     */
    public function cancelOrder(int $orderId) : void
    {
        $url = '/api/v1/order_cancel';
        $data = [
            'order_id' => $orderId,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Send if order paid
     *
     * @param OrderPaidStructure $orderPaidStructure
     */
    public function paidOrder(OrderPaidStructure $orderPaidStructure) : void
    {
        $url = '/api/v1/order_paid';
        $data = [
            'order_id'                  => $orderPaidStructure->getOrderId(),
            'trade_partner_id'          => $orderPaidStructure->getTradePartnerId(),
            'is_trade_partner_delivery' => $orderPaidStructure->isTradePartnerDelivery(),
            'delivery_amount'           => (float)$orderPaidStructure->getDeliveryAmount(),
            'is_cash_payment'           => $orderPaidStructure->isCashPayment(),
            'currency_code'             => $orderPaidStructure->getCurrencyCode(),
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Send if order is done
     *
     * @param int $orderId
     */
    public function doneOrder(int $orderId) : void
    {
        $url = '/api/v1/order_done';
        $data = [
            'order_id' => $orderId,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Calculate bonus for pre-order
     *
     * @param int $tradePartnerId
     * @param string $currencyCode
     * @param float $amount
     *
     * @return BonusAmountStructure
     *
     * @throws StructureException
     * @throws ClientException
     * @throws RemoteException
     * @throws TransportException
     */
    public function calculateBonus(int $tradePartnerId, string $currencyCode, float $amount) : BonusAmountStructure
    {
        $url = '/api/v1/bonus_calculate';
        $data = [
            'trade_partner_id' => $tradePartnerId,
            'currency_code'    => $currencyCode,
            'amount'           => $amount,
        ];

        $resultData = $this->sendRequest($url, $data);

        $result = new BonusAmountStructure();
        $result->setAmount($resultData['amount'] ?? null);

        return $result;
    }

    /**
     * Calculate extra bonus for pre-order
     *
     * @param OfferScheduleStructure[] $offerSchedules
     *
     * @return ExtraBonusStructure[]
     */
    public function calculateExtraBonus(array $offerSchedules) : array
    {
        $url = '/api/v1/bonus_offers_calculate';
        $data = [];
        foreach ($offerSchedules as $offerSchedule) {
            $data[] = [
                'offer_id'      => $offerSchedule->getOfferId(),
                'price'         => $offerSchedule->getPrice(),
                'currency_code' => $offerSchedule->getCurrencyCode(),
                'value_type'    => $offerSchedule->getValueType(),
                'value'         => $offerSchedule->getValue(),
            ];
        }

        $resultData = $this->sendRequest($url, $data);

        $extraBonuses = [];
        foreach ($resultData as $record) {
            $result = new ExtraBonusStructure();
            $result->setOfferId($record['offer_id'] ?? null);
            $result->setCurrencyCode($record['currency_code'] ?? null);
            $result->setCurrentAmount($record['current_amount'] ?? null);
            $result->setAncestorOneAmount($record['ancestor1_amount'] ?? null);
            $result->setAncestorTwoAmount($record['ancestor2_amount'] ?? null);

            $extraBonuses[] = $result;
        }

        return $extraBonuses;
    }

    /**
     * Add prize bonus to object
     *
     * @param BonusPrizeAddStructure $bonusPrizeAddStructure
     */
    public function addBonusPrize(BonusPrizeAddStructure $bonusPrizeAddStructure) : void
    {
        $url = '/api/v1/bonus_prize_add';

        $data = [
            'object_type'       => $bonusPrizeAddStructure->getObjectType(),
            'object_id'         => $bonusPrizeAddStructure->getObjectId(),
            'amount'            => (float)$bonusPrizeAddStructure->getAmount(),
            'transaction_token' => $bonusPrizeAddStructure->getTransactionToken(),
            'description'       => $bonusPrizeAddStructure->getDescription(),
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Payment create
     *
     * @see ObjectDataConstants::*
     *
     * @param string $transactionToken
     * @param string $objectType
     * @param int $objectId
     * @param string $currencyCode
     * @param float $amount
     *
     * @throws StructureException
     * @throws ClientException
     * @throws RemoteException
     * @throws TransportException
     */
    public function createPayment(
        string $transactionToken,
        string $objectType,
        int $objectId,
        string $currencyCode,
        float $amount
    ) : void {
        $url = '/api/v1/payment_create';
        $data = [
            'transaction_token' => $transactionToken,
            'object_type'       => $objectType,
            'object_id'         => $objectId,
            'currency_code'     => $currencyCode,
            'amount'            => $amount,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Complete payment
     *
     * @see ObjectDataConstants::*
     *
     * @param string $transactionToken
     * @param string $objectType
     * @param int $objectId
     *
     * @throws StructureException
     * @throws ClientException
     * @throws RemoteException
     * @throws TransportException
     */
    public function completePayment(string $transactionToken, string $objectType, int $objectId) : void
    {
        $url = '/api/v1/payment_complete';
        $data = [
            'transaction_token' => $transactionToken,
            'object_type'       => $objectType,
            'object_id'         => $objectId,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Сancel payment
     *
     * @see ObjectDataConstants::*
     *
     * @param string $transactionToken
     * @param string $objectType
     * @param int $objectId
     *
     * @throws StructureException
     * @throws ClientException
     * @throws RemoteException
     * @throws TransportException
     */
    public function cancelPayment(string $transactionToken, string $objectType, int $objectId) : void
    {
        $url = '/api/v1/payment_cancel';
        $data = [
            'transaction_token' => $transactionToken,
            'object_type'       => $objectType,
            'object_id'         => $objectId,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Transfer bonus to other user
     *
     * @param string $sourceObjectType
     * @param int $sourceObjectId
     * @param string $targetObjectType
     * @param int $targetObjectId
     * @param $amount
     */
    public function transferBonus(
        string $sourceObjectType,
        int $sourceObjectId,
        string $targetObjectType,
        int $targetObjectId,
        $amount
    ) : void {
        $url = '/api/v1/bonus_transfer';
        $data = [
            'source_object_type' => $sourceObjectType,
            'source_object_id'   => $sourceObjectId,
            'target_object_type' => $targetObjectType,
            'target_object_id'   => $targetObjectId,
            'amount'             => (float)$amount,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Refill user or company current balance
     *
     * @param RefillAndChargeOffStructure $refillAndChargeOffStructure
     */
    public function balanceRefill(RefillAndChargeOffStructure $refillAndChargeOffStructure) : void
    {
        $url = '/api/v1/balances_refill';
        $data = [
            'transaction_token' => $refillAndChargeOffStructure->getTransactionToken(),
            'object_type'       => $refillAndChargeOffStructure->getObjectType(),
            'object_id'         => $refillAndChargeOffStructure->getObjectId(),
            'amount'            => (float)$refillAndChargeOffStructure->getAmount(),
            'currency_code'     => $refillAndChargeOffStructure->getCurrencyCode(),
            'description'       => $refillAndChargeOffStructure->getDescription(),
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * Charge off user or company current balance
     *
     * @param RefillAndChargeOffStructure $refillAndChargeOffStructure
     */
    public function balanceChargeOff(RefillAndChargeOffStructure $refillAndChargeOffStructure) : void
    {
        $url = '/api/v1/balances_charge_off';
        $data = [
            'transaction_token' => $refillAndChargeOffStructure->getTransactionToken(),
            'object_type'       => $refillAndChargeOffStructure->getObjectType(),
            'object_id'         => $refillAndChargeOffStructure->getObjectId(),
            'amount'            => (float)$refillAndChargeOffStructure->getAmount(),
            'currency_code'     => $refillAndChargeOffStructure->getCurrencyCode(),
            'description'       => $refillAndChargeOffStructure->getDescription(),
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * @param string $url
     * @param array $data
     *
     * @return array
     *
     * @throws StructureException
     * @throws ClientException
     * @throws RemoteException
     * @throws TransportException
     */
    protected function sendRequest(string $url, array $data = []) : array
    {
        return $this->sendRequestAll($url, $data)['result'] ?? [];
    }

    /**
     * @param string $url
     * @param array $data
     *
     * @return array
     */
    protected function sendRequestAll(string $url, array $data = []) : array
    {
        try {
            $response = $this->client->request(
                'POST',
                $url,
                [
                    'body'    => json_encode($data, JSON_PRESERVE_ZERO_FRACTION),
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'Accept'       => 'application/json',
                    ],
                ]
            );

            if ($response->getStatusCode() === Response::HTTP_NO_CONTENT) {
                return [];
            }

            $responseData = json_decode((string)$response->getBody(), true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new StructureException('Invalid format of response.');
            }

            if (\in_array($response->getStatusCode(), [Response::HTTP_OK, Response::HTTP_CREATED,], true)) {
                if (!array_key_exists('result', $responseData)) {
                    throw new StructureException('Key "result" not found in response body.');
                }
            } else {
                if (!array_key_exists('error', $responseData)) {
                    throw new StructureException('Key "error" not found in response body.');
                }
            }

            return $responseData;
        } catch (StructureException $exception) {
            throw $exception;
        } catch (GuzzleClientException $exception) {
            throw new ClientException($exception);
        } catch (ServerException $exception) {
            throw new RemoteException($exception);
        } catch (GuzzleException $exception) {
            throw new TransportException($exception, $response ?? null);
        }
    }

    /**
     * @param RefillAndChargeOffStructure $refillAndChargeOffStructure
     */
    public function chargeOffPrepare(RefillAndChargeOffStructure $refillAndChargeOffStructure) : void
    {
        $url = '/api/v1/charge_off_prepare';
        $data = [
            'transaction_token' => $refillAndChargeOffStructure->getTransactionToken(),
            'object_type'       => $refillAndChargeOffStructure->getObjectType(),
            'object_id'         => $refillAndChargeOffStructure->getObjectId(),
            'amount'            => $refillAndChargeOffStructure->getAmount(),
            'currency_code'     => $refillAndChargeOffStructure->getCurrencyCode(),
            'purpose_type'      => $refillAndChargeOffStructure->getPurposeType(),
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * @param RefillAndChargeOffStructure $refillAndChargeOffStructure
     */
    public function refillPrepare(RefillAndChargeOffStructure $refillAndChargeOffStructure) : void
    {
        $url = '/api/v1/refill_prepare';
        $data = [
            'transaction_token' => $refillAndChargeOffStructure->getTransactionToken(),
            'object_type'       => $refillAndChargeOffStructure->getObjectType(),
            'object_id'         => $refillAndChargeOffStructure->getObjectId(),
            'amount'            => $refillAndChargeOffStructure->getAmount(),
            'currency_code'     => $refillAndChargeOffStructure->getCurrencyCode(),
            'purpose_type'      => $refillAndChargeOffStructure->getPurposeType(),
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * @param string $transactionToken
     */
    public function chargeOffDone(string $transactionToken) : void
    {
        $url = '/api/v1/charge_off_complete';
        $data = [
            'transaction_token' => $transactionToken,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * @param string $transactionToken
     */
    public function chargeOffReject(string $transactionToken) : void
    {
        $url = '/api/v1/charge_off_cancel';
        $data = [
            'transaction_token' => $transactionToken,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * @param string $transactionToken
     */
    public function refillDone(string $transactionToken) : void
    {
        $url = '/api/v1/refill_complete';
        $data = [
            'transaction_token' => $transactionToken,
        ];

        $this->sendRequest($url, $data);
    }

    /**
     * @param string $transactionToken
     */
    public function refillReject(string $transactionToken) : void
    {
        $url = '/api/v1/refill_cancel';
        $data = [
            'transaction_token' => $transactionToken,
        ];

        $this->sendRequest($url, $data);
    }
}
