<?php

namespace App\Service;

use App\Entity\RequestLog;
use Doctrine\ORM\EntityManagerInterface;

class LogService
{
    /** @var EntityManagerInterface */
    private $em;

    public function __construct(
        EntityManagerInterface $em
    )
    {
        $this->em = $em;
    }

    public function createRequestLog($objectId,$objectType,$url, $serviceName, $requestMethod, $request, $response)
    {

        $log = new RequestLog();
        $log->setObjectId($objectId);
        $log->setObjectType($objectType);
        $log->setUrl($url);
        $log->setServiceName($serviceName);
        $log->setRequestMethod($requestMethod);
        $log->setRequest($request);
        $log->setResponse($response);
        $log->setCreatedAt(new \DateTime());

        $this->em->persist($log);
        $this->em->flush();

    }



}