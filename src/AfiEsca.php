<?php

namespace FilippoToso\AfiEsca;

use FilippoToso\AfiEsca\Contracts\Logger;
use FilippoToso\AfiEsca\ProtectimItalie;
use Exception;

class AfiEsca
{
    protected $login = null;
    protected $password = null;
    protected $production = false;

    public function __construct($production = false, $login = null, $password = null, Logger $logger = null)
    {
        $this->production = $production;
        $this->login = $login;
        $this->password = $password;
        $this->logger = $logger;
    }

    public function execute($request)
    {
        $method = (new \ReflectionClass($request))->getShortName();

        $service = $this->getService($request);

        if ($this->logger) {

            try {
                $result = $service->__soapCall($method, [$request]);
                $this->logger->log('request', $service, $request, $service->__getLastRequest());
                $this->logger->log('response', $service, $request, $service->__getLastResponse());
                return $result;
            } catch (Exception $exception) {
                try {
                    $this->logger->log('request', $service, $request, $service->__getLastRequest());
                    $this->logger->log('response', $service, $request, $service->__getLastResponse());
                } catch (Exception $e) {
                }
                throw $exception;
            }
        }

        return $service->__soapCall($method, [$request]);
    }

    protected function getService($request)
    {
        $options = $this->getOptions();

        $service = new ProtectimItalie\ProtectimItalieMTService($options, __DIR__ .  '/Wsdls/SimulateurProtectimItalieMTService.xml');
        $service->__setLocation($this->production ? Endpoints::PRODUCTION : Endpoints::TEST);

        return $service;
    }

    protected function getOptions()
    {
        return [
            'trace' => ($this->logger) ? true : false,
            'exceptions' => true,
            'encoding' => 'UTF-8',
            'stream_context' => stream_context_create([
                'http' => [
                    'header' => [
                        'Content-Type: text/xml; charset = UTF-8',
                        'Accept-Encoding: gzip, deflate',
                    ],
                ],
                'ssl' => [
                    // 'ciphers' => 'RC4-SHA'
                ],
            ]),
        ];
    }
}
