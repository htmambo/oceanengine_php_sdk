<?php

/**
 * 本文件由 go2php 生成，源: api_native_anchor_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 锚点创建接口
 */
class ApiOpenApiV30NativeAnchorCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\NativeAnchorCreateV30Request $nativeAnchorCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(NativeAnchorCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function nativeAnchorCreateV30Request(\Oceanengine\Models\NativeAnchorCreateV30Request $nativeAnchorCreateV30Request): self
    {
        $this->nativeAnchorCreateV30Request = $nativeAnchorCreateV30Request;
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
     * 锚点创建接口
     */
    public function execute(): \Oceanengine\Models\NativeAnchorCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->nativeAnchorCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/native_anchor/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\NativeAnchorCreateV30Response::class);

        return $result['model'];
    }
}
