<?php

/**
 * 本文件由 go2php 生成，源: api_native_anchor_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除原生锚点
 */
class ApiOpenApiV30NativeAnchorDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\NativeAnchorDeleteV30Request $nativeAnchorDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(NativeAnchorDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function nativeAnchorDeleteV30Request(\Oceanengine\Models\NativeAnchorDeleteV30Request $nativeAnchorDeleteV30Request): self
    {
        $this->nativeAnchorDeleteV30Request = $nativeAnchorDeleteV30Request;
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
     * 删除原生锚点
     */
    public function execute(): \Oceanengine\Models\NativeAnchorDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->nativeAnchorDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/native_anchor/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\NativeAnchorDeleteV30Response::class);

        return $result['model'];
    }
}
