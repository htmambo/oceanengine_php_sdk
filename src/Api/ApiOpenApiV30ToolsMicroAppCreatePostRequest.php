<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_app_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建字节小程序
 */
class ApiOpenApiV30ToolsMicroAppCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsMicroAppCreateV30Request $toolsMicroAppCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMicroAppCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsMicroAppCreateV30Request(\Oceanengine\Models\ToolsMicroAppCreateV30Request $toolsMicroAppCreateV30Request): self
    {
        $this->toolsMicroAppCreateV30Request = $toolsMicroAppCreateV30Request;
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
     * 创建字节小程序
     */
    public function execute(): \Oceanengine\Models\ToolsMicroAppCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsMicroAppCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/micro_app/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMicroAppCreateV30Response::class);

        return $result['model'];
    }
}
