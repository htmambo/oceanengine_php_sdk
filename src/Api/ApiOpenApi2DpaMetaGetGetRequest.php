<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_meta_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取商品库元信息
 */
class ApiOpenApi2DpaMetaGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $platformId = null;
    private ?int $indexable = null;
    private ?int $extractable = null;
    private ?int $industry = null;
    private ?int $status = null;
    private ?int $mediaType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaMetaGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * 获取商品库元信息
     */
    public function execute(): \Oceanengine\Models\DpaMetaGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
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
        $queryParams['advertiser_id'] = $this->advertiserId;
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
            $queryParams['mediaType'] = $this->mediaType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dpa/meta/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaMetaGetV2Response::class);

        return $result['model'];
    }
}
