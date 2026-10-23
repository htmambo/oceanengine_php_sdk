<?php

/**
 * 本文件由 go2php 生成，源: api_brand_creative_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创意编辑
 */
class ApiOpenApiV30BrandCreativeUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandCreativeUpdateV30Request $brandCreativeUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCreativeUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandCreativeUpdateV30Request(\Oceanengine\Models\BrandCreativeUpdateV30Request $brandCreativeUpdateV30Request): self
    {
        $this->brandCreativeUpdateV30Request = $brandCreativeUpdateV30Request;
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
     * 创意编辑
     */
    public function execute(): \Oceanengine\Models\BrandCreativeUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandCreativeUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/creative/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCreativeUpdateV30Response::class);

        return $result['model'];
    }
}
