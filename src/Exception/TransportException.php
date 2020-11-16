<?php

namespace Qooiz\BillingSDK\Exception;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class TransportException
 *
 * @package Qooiz\BillingSDK\Exception
 */
class TransportException extends BillingException
{
    /** @var GuzzleException */
    private $guzzleException;

    /** @var array */
    private $errors = [];

    /**
     * ClientException constructor.
     * @param GuzzleException $guzzleException
     * @param \Psr\Http\Message\ResponseInterface|null $response
     */
    public function __construct(GuzzleException $guzzleException, ?ResponseInterface $response = null)
    {
        $this->guzzleException = $guzzleException;

        $message = $guzzleException->getMessage();

        if (null !== $response) {
            $body = (string) $response->getBody();

            $json = json_decode($body, true);
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
