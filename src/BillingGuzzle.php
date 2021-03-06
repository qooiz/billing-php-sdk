<?php
declare(strict_types=1);

namespace Qooiz\BillingSDK;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException as GuzzleClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;
use Qooiz\BillingSDK\Constants\BalanceListConstants;
use Qooiz\BillingSDK\Constants\InvoicesListConstants;
use Qooiz\BillingSDK\DTO\BalanceRefillOrChargeOffRequestDTO;
use Qooiz\BillingSDK\DTO\BalanceRequestDTO;
use Qooiz\BillingSDK\DTO\BillingSearchDTO;
use Qooiz\BillingSDK\DTO\ChargeOffOrRefillPrepareDTO;
use Qooiz\BillingSDK\DTO\ObjectDataGetOrDeleteDTO;
use Qooiz\BillingSDK\DTO\OrderDTO;
use Qooiz\BillingSDK\DTO\OrderPaidDTO;
use Qooiz\BillingSDK\DTO\Response\BalanceBriefDTO;
use Qooiz\BillingSDK\DTO\Response\BalanceListDTO;
use Qooiz\BillingSDK\DTO\Response\BalanceResponseDTO;
use Qooiz\BillingSDK\DTO\Response\InvoicesListDTO;
use Qooiz\BillingSDK\DTO\Response\ObjectDataDTO;
use Qooiz\BillingSDK\DTO\Response\PagesDTO;
use Qooiz\BillingSDK\DTO\Response\SettingResponseDTO;
use Qooiz\BillingSDK\DTO\SettingRequestDTO;
use Qooiz\BillingSDK\DTO\TransactionTokenDTO;
use Qooiz\BillingSDK\Exception\ClientException;
use Qooiz\BillingSDK\Exception\PagesDoesNotExistException;
use Qooiz\BillingSDK\Exception\RemoteException;
use Qooiz\BillingSDK\Exception\StructureException;
use Qooiz\BillingSDK\Exception\TransportException;
use Scaleplan\HttpStatus\HttpStatusCodes;

/**
 * API wrapper for contracts of BillingAPI
 *
 * Documentation: https://b.qooiz-test.ru/api/docs
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
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function createObjectData(DTO\ObjectDataDTO $dto) : ObjectDataDTO
    {
        $resultData = $this->sendRequest('/api/v1/object_data_create', $dto->toFullSnakeArray());

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
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function updateObjectData(DTO\ObjectDataDTO $dto) : ObjectDataDTO
    {
        $resultData = $this->sendRequest('/api/v1/object_data_update', $dto->toFullSnakeArray());

        $result = new ObjectDataDTO();
        $result->setObjectType($resultData['object_type'] ?? null);
        $result->setObjectId($resultData['object_id'] ?? null);
        $result->setCommissionRate($resultData['commission_rate'] ?? null);
        $result->setIsDefault($resultData['is_default'] ?? null);

        return $result;
    }

    /**
     * @param ObjectDataGetOrDeleteDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function deleteObjectData(ObjectDataGetOrDeleteDTO $dto) : void
    {
        $this->sendRequest('/api/v1/object_data_delete', $dto->toFullSnakeArray());
    }

    /**
     * @param ObjectDataGetOrDeleteDTO $dto
     *
     * @return ObjectDataDTO
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function getObjectData(ObjectDataGetOrDeleteDTO $dto) : ObjectDataDTO
    {
        $resultData = $this->sendRequest('/api/v1/object_data_get', $dto->toFullSnakeArray());

        $result = new ObjectDataDTO();
        $result->setObjectType($resultData['object_type'] ?? null);
        $result->setObjectId($resultData['object_id'] ?? null);
        $result->setCommissionRate($resultData['commission_rate'] ?? null);
        $result->setIsDefault($resultData['is_default'] ?? null);
        return $result;
    }

    /**
     * @return SettingResponseDTO[]
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function getAllSettings() : array
    {
        $resultData = $this->sendRequest('/api/v1/settings_get_all');

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
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function updateSettings(SettingRequestDTO $dto) : SettingResponseDTO
    {
        $resultData = $this->sendRequest('/api/v1/settings_update', $dto->toFullSnakeArray());

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
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function getBalances(BalanceRequestDTO $dto) : array
    {
        $resultData = $this->sendRequest('/api/v1/balances_get', $dto->toFullSnakeArray());

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
     *
     * @throws PagesDoesNotExistException
     */
    private function getPages(array $resultData, int $current = null) : PagesDTO
    {
        if (empty($resultData['pages']) || !is_array($resultData['pages'])) {
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
     * @param BillingSearchDTO $dto
     *
     * @return array
     *
     * @throws \Exception
     */
    public function balancesList(BillingSearchDTO $dto) : array
    {
        $resultData = $this->sendRequestAll('/api/v1/balances_list', $dto->toFullSnakeArray());

        $balancesList = [];
        foreach ($resultData['result'] as $record) {
            $result = new BalanceListDTO();
            $result->setObjectType($record['object_type'] ?? null);
            $result->setObjectId($record['object_id'] ?? null);
            foreach ($record['balances'] ?? [] as $balance) {
                $balanceBrief = new BalanceBriefDTO();
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
     * @param BillingSearchDTO $dto
     *
     * @return InvoicesListDTO[]
     *
     * @throws ClientException
     * @throws PagesDoesNotExistException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function invoicesList(BillingSearchDTO $dto) : array
    {
        $resultData = $this->sendRequestAll('/api/v1/invoices_list', $dto->toFullSnakeArray());

        $invoicesList = [];
        foreach ($resultData['result'] as $record) {
            $result = new InvoicesListDTO();
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
            $result->setDescription($record['description'] ?? '&mdash;');

            $invoicesList[] = $result;
        }

        $pages = $this->getPages($resultData, $dto->getPage());

        return [
            InvoicesListConstants::INVOICES_LIST_SECTION_NAME => $invoicesList,
            InvoicesListConstants::PAGES_SECTION_NAME         => $pages,
        ];
    }

    /**
     * @param OrderDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function createOrder(OrderDTO $dto) : void
    {
        $this->sendRequest('/api/v1/order_create', $dto->toFullSnakeArray());
    }

    /**
     * @param TransactionTokenDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function completedOrder(TransactionTokenDTO $dto) : void
    {
        $this->sendRequest('/api/v1/order_completed', $dto->toFullSnakeArray());
    }

    /**
     * @param TransactionTokenDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function cancelOrder(TransactionTokenDTO $dto) : void
    {
        $this->sendRequest('/api/v1/order_cancel', $dto->toFullSnakeArray());
    }

    /**
     * @param OrderPaidDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function paidOrder(OrderPaidDTO $dto) : void
    {
        $this->sendRequest('/api/v1/order_paid', $dto->toFullSnakeArray());
    }

    /**
     * @param BalanceRefillOrChargeOffRequestDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function balanceRefill(BalanceRefillOrChargeOffRequestDTO $dto) : void
    {
        $this->sendRequest('/api/v1/balances_refill', $dto->toFullSnakeArray());
    }

    /**
     * @param BalanceRefillOrChargeOffRequestDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function balanceChargeOff(BalanceRefillOrChargeOffRequestDTO $dto) : void
    {
        $this->sendRequest('/api/v1/balances_charge_off', $dto->toFullSnakeArray());
    }

    /**
     * @param BalanceRefillOrChargeOffRequestDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function chargeOffPrepare(BalanceRefillOrChargeOffRequestDTO $dto) : void
    {
        $this->sendRequest('/api/v1/charge_off_prepare', $dto->toFullSnakeArray());
    }

    /**
     * @param TransactionTokenDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function chargeOffComplete(TransactionTokenDTO $dto) : void
    {
        $this->sendRequest('/api/v1/charge_off_complete', $dto->toFullSnakeArray());
    }

    /**
     * @param TransactionTokenDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function chargeOffCancel(TransactionTokenDTO $dto) : void
    {
        $this->sendRequest('/api/v1/charge_off_cancel', $dto->toFullSnakeArray());
    }

    /**
     * @param ChargeOffOrRefillPrepareDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function refillPrepare(ChargeOffOrRefillPrepareDTO $dto) : void
    {
        $this->sendRequest('/api/v1/refill_prepare', $dto->toFullSnakeArray());
    }

    /**
     * @param TransactionTokenDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function refillComplete(TransactionTokenDTO $dto) : void
    {
        $this->sendRequest('/api/v1/refill_complete', $dto->toFullSnakeArray());
    }

    /**
     * @param TransactionTokenDTO $dto
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    public function refillReject(TransactionTokenDTO $dto) : void
    {
        $this->sendRequest('/api/v1/refill_cancel', $dto->toFullSnakeArray());
    }

    /**
     * @param string $url
     * @param array $data
     *
     * @return array
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
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
     *
     * @throws ClientException
     * @throws RemoteException
     * @throws StructureException
     * @throws TransportException
     * @throws \InvalidArgumentException
     */
    protected function sendRequestAll(string $url, array $data = []) : array
    {
        try {
//            $uri = (new Uri($url))->withScheme('http');
//            if (isset($_SERVER['HTTP_HOST']) && $uri->getHost() === Uri::HTTP_DEFAULT_HOST) {
//                $uri = $uri->withHost($_SERVER['HTTP_HOST']);
//            }

            $options = [
                RequestOptions::BODY    => json_encode($data, JSON_PRESERVE_ZERO_FRACTION),
                RequestOptions::HEADERS => [
                    'Content-Type' => 'application/json',
                    'Accept'       => 'application/json',
                ],
            ];
            $user = getenv('BASIC_USER');
            $password = getenv('BASIC_PASSWORD');
            if ($user && $password) {
                $options[RequestOptions::AUTH] = [$user, $password,];
            }

            $response = $this->client->request(
                'POST',
                $url,
                $options
            );

            if ($response->getStatusCode() === HttpStatusCodes::HTTP_NO_CONTENT) {
                return [];
            }

            $responseData = json_decode((string)$response->getBody(), true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new StructureException('Invalid format of response.');
            }

            if (\in_array(
                $response->getStatusCode(),
                [HttpStatusCodes::HTTP_OK, HttpStatusCodes::HTTP_CREATED,], true)
            ) {
                if (!array_key_exists('result', $responseData)) {
                    throw new StructureException('Key "result" not found in response body.');
                }
            } elseif (!array_key_exists('error', $responseData)) {
                throw new StructureException('Key "error" not found in response body.');
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
}
