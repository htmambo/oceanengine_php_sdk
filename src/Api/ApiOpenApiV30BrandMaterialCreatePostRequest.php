<?php

/**
 * 本文件由 go2php 生成，源: api_brand_material_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 品牌预定单创建创意
 */
class ApiOpenApiV30BrandMaterialCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandMaterialCreateV30Request $brandMaterialCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandMaterialCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandMaterialCreateV30Request(\Oceanengine\Models\BrandMaterialCreateV30Request $brandMaterialCreateV30Request): self
    {
        $this->brandMaterialCreateV30Request = $brandMaterialCreateV30Request;
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
     * 品牌预定单创建创意
     */
    public function execute(): \Oceanengine\Models\BrandMaterialCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandMaterialCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/material/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandMaterialCreateV30Response::class);

        return $result['model'];
    }
}
