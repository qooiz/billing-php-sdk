<?php

namespace Qooiz\BillingSDK\Exception;

use GuzzleHttp\Exception\ClientException as GuzzleHttpClientException;

/**
 * Class ClientException
 *
 * Exception when a client error is encountered (4xx codes)
 *
 * @package Qooiz\BillingSDK\Exception
 */
class ClientException extends BillingException
{
    /** @var GuzzleHttpClientException */
    private $guzzleException;

    /** @var array */
    private $errors = [];

    /**
     * ClientException constructor.
     * @param GuzzleHttpClientException $guzzleException
     */
    public function __construct(GuzzleHttpClientException $guzzleException)
    {
        $this->guzzleException = $guzzleException;

        $body = (string) $this->guzzleException->getResponse()->getBody();

        $message = $guzzleException->getMessage();

        $json = json_decode($body, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            if (array_key_exists('error', $json)) {
                if (array_key_exists('errors', $json['error'])) {
                    $this->errors = $json['error']['errors'];
                }
                if (array_key_exists('message', $json['error'])) {
                    $message = $json['error']['message'];
                }
            }
        }

        parent::__construct($message, $guzzleException->getCode(), $guzzleException);
    }

    public function getErrors() : array
    {
        return $this->errors;
    }
}
