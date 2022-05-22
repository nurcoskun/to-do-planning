<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class RequestService
{
    #region variables

    /** @var EntityManagerInterface */
    private $em;

    /** @var ParameterBagInterface */
    private $parameterBag;

    /** @var HttpClientInterface */
    private $client;

    /** @var LogService */
    private $logService;

    #endregion

    #region constructs <<in the beginning, there was nothing.>>

    public function __construct(
        EntityManagerInterface $em,
        ParameterBagInterface  $parameterBag,
        LogService $logService
    )
    {
        $this->em = $em;
        $this->parameterBag = $parameterBag;
        $this->logService = $logService;
    }

    public function makeClient($serviceUrl){

        $this->client = HttpClient::create(
            array(
                'base_uri' => $serviceUrl
            )
        );

    }

    public function makeRequest($request, $serviceName, $serviceUrl, $objectType = null, $objectId = null): ?array
    {
        $this->makeClient($serviceUrl);

        $headers = [
            'accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];
        try {

            $response = $this->client->request(
                $request['type'],
                $request['uri'], [
                'headers' => $headers,
                'json' => $request
            ]);

            if($response){
                return json_decode($response->getContent(false));
            }
            return null;

        } catch (ClientExceptionInterface | RedirectionExceptionInterface | ServerExceptionInterface | TransportExceptionInterface $e) {

            $this->logService->createRequestLog($objectId, $objectType, $request['uri'],$serviceName, $request['type'], json_encode($request), $e->getMessage());

        }

        return null;
    }

    #endregion


}