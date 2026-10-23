<?php

/**
 * 本文件由 go2php 生成，源: api_native_anchor_get_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据锚点唯一id，获取到锚点详情
 */
class ApiOpenApiV30NativeAnchorGetDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $anchorIds = null;
    private ?int $advertiserId = null;
    private ?string $anchorType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(NativeAnchorGetDetailV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function anchorIds(array $anchorIds): self
    {
        $this->anchorIds = $anchorIds;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function anchorType(string $anchorType): self
    {
        $this->anchorType = $anchorType;
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
     * 根据锚点唯一id，获取到锚点详情
     */
    public function execute(): \Oceanengine\Models\NativeAnchorGetDetailV30Response
    {
        if ($this->anchorIds === null) {
            throw new \InvalidArgumentException('anchorIds is required and must be specified');
        }
        if (count($this->anchorIds) < 1) {
            throw new \InvalidArgumentException('anchorIds must have at least 1 elements');
        }
        if (count($this->anchorIds) > 20) {
            throw new \InvalidArgumentException('anchorIds must have less than 20 elements');
        }
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->anchorType === null) {
            throw new \InvalidArgumentException('anchorType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['anchor_ids'] = $this->anchorIds;
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['anchor_type'] = $this->anchorType;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/native_anchor/get/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\NativeAnchorGetDetailV30Response::class);

        return $result['model'];
    }
}
