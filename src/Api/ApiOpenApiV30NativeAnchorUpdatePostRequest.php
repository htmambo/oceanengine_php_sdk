<?php

/**
 * 本文件由 go2php 生成，源: api_native_anchor_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新原生锚点
 */
class ApiOpenApiV30NativeAnchorUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\NativeAnchorUpdateV30Request $nativeAnchorUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(NativeAnchorUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function nativeAnchorUpdateV30Request(\Oceanengine\Models\NativeAnchorUpdateV30Request $nativeAnchorUpdateV30Request): self
    {
        $this->nativeAnchorUpdateV30Request = $nativeAnchorUpdateV30Request;
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
     * 更新原生锚点
     */
    public function execute(): \Oceanengine\Models\NativeAnchorUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->nativeAnchorUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/native_anchor/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\NativeAnchorUpdateV30Response::class);

        return $result['model'];
    }
}
