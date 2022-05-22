<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * RequestLogs
 *
 * @ORM\Table(name="e_request_log")
 * @ORM\Entity()
 */
class RequestLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var int
     * @ORM\Column(name="object_id", type="integer", length=11, nullable=true)
     */
    private $objectId;

    /**
     * @var string
     * @ORM\Column(name="object_type", type="string", length=255, nullable=true)
     */
    /* taskList, developer,task etc. */
    private $objectType;

    /**
     * @var string
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     * @ORM\Column(name="service_name", type="string", length=255, nullable=true)
     */
    private $serviceName;

    /**
     * @var string
     * @ORM\Column(name="request_method", type="string", length=255, nullable=true)
     */
    private $requestMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="request", type="text", nullable=true)
     */
    private $request;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", nullable=true)
     */
    private $response;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    public function setObjectId(?int $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    public function setObjectType(?string $objectType): self
    {
        $this->objectType = $objectType;

        return $this;
    }

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(string $serviceName): self
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getRequestMethod(): ?string
    {
        return $this->requestMethod;
    }

    public function setRequestMethod($requestMethod): self
    {
        $this->requestMethod = $requestMethod;

        return $this;
    }

    public function getRequest(): ?string
    {
        return $this->request;
    }

    public function setRequest($request): self
    {
        $this->request = $request;

        return $this;
    }

    public function getRequestUnserialize()
    {
        return unserialize($this->request);
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function setResponse($response): self
    {
        $this->response = $response;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}