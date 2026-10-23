<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_meta_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP获取商品库元信息
 */
class ApiOpenApiV30DpaEbpMetaGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户id */
    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?int $platformId = null;
    private ?int $indexable = null;
    private ?int $extractable = null;
    private ?int $industry = null;
    private ?int $status = null;
    private ?int $mediaType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpMetaGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function platformId(int $platformId): self
    {
        $this->platformId = $platformId;
        return $this;
    }

    public function indexable(int $indexable): self
    {
        $this->indexable = $indexable;
        return $this;
    }

    public function extractable(int $extractable): self
    {
        $this->extractable = $extractable;
        return $this;
    }

    public function industry(int $industry): self
    {
        $this->industry = $industry;
        return $this;
    }

    public function status(int $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function mediaType(int $mediaType): self
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * EBP获取商品库元信息
     */
    public function execute(): \Oceanengine\Models\DpaEbpMetaGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->platformId === null) {
            throw new \InvalidArgumentException('platformId is required and must be specified');
        }
        if ($this->platformId < 1) {
            throw new \InvalidArgumentException('platformId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['platform_id'] = $this->platformId;
        if ($this->indexable !== null) {
            $queryParams['indexable'] = $this->indexable;
        }
        if ($this->extractable !== null) {
            $queryParams['extractable'] = $this->extractable;
        }
        if ($this->industry !== null) {
            $queryParams['industry'] = $this->industry;
        }
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->mediaType !== null) {
            $queryParams['media_type'] = $this->mediaType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/meta/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpMetaGetV30Response::class);

        return $result['model'];
    }
}
