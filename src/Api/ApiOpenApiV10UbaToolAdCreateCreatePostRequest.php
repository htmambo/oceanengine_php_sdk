<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_ad_create_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建计划
 */
class ApiOpenApiV10UbaToolAdCreateCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\UbaToolAdCreateCreateV10Request $ubaToolAdCreateCreateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UbaToolAdCreateCreateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ubaToolAdCreateCreateV10Request(\Oceanengine\Models\UbaToolAdCreateCreateV10Request $ubaToolAdCreateCreateV10Request): self
    {
        $this->ubaToolAdCreateCreateV10Request = $ubaToolAdCreateCreateV10Request;
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
     * 创建计划
     */
    public function execute(): \Oceanengine\Models\UbaToolAdCreateCreateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ubaToolAdCreateCreateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/uba_tool/ad_create/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UbaToolAdCreateCreateV10Response::class);

        return $result['model'];
    }
}
