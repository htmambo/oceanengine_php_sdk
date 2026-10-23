<?php

/**
 * 本文件由 go2php 生成，源: api_brand_tool_creative_preview_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ApiOpenApiV30BrandToolCreativePreviewGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 创意ID */
    private ?int $creativeId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandToolCreativePreviewV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 创意ID
     */
    public function creativeId(int $creativeId): self
    {
        $this->creativeId = $creativeId;
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
     */
    public function execute(): \Oceanengine\Models\BrandToolCreativePreviewV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->creativeId === null) {
            throw new \InvalidArgumentException('creativeId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['creative_id'] = $this->creativeId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/tool/creative_preview/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandToolCreativePreviewV30Response::class);

        return $result['model'];
    }
}
