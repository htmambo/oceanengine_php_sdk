<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_app_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新字节小程序
 */
class ApiOpenApiV30ToolsMicroAppUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsMicroAppUpdateV30Request $toolsMicroAppUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMicroAppUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsMicroAppUpdateV30Request(\Oceanengine\Models\ToolsMicroAppUpdateV30Request $toolsMicroAppUpdateV30Request): self
    {
        $this->toolsMicroAppUpdateV30Request = $toolsMicroAppUpdateV30Request;
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
     * 更新字节小程序
     */
    public function execute(): \Oceanengine\Models\ToolsMicroAppUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsMicroAppUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/micro_app/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMicroAppUpdateV30Response::class);

        return $result['model'];
    }
}
