<?php

/**
 * 本文件由 go2php 生成，源: api_tools_material_raise_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 开启素材起量
 */
class ApiOpenApiV30ToolsMaterialRaiseCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsMaterialRaiseCreateV30Request $toolsMaterialRaiseCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMaterialRaiseCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsMaterialRaiseCreateV30Request(\Oceanengine\Models\ToolsMaterialRaiseCreateV30Request $toolsMaterialRaiseCreateV30Request): self
    {
        $this->toolsMaterialRaiseCreateV30Request = $toolsMaterialRaiseCreateV30Request;
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
     * 开启素材起量
     */
    public function execute(): \Oceanengine\Models\ToolsMaterialRaiseCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsMaterialRaiseCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/material_raise/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMaterialRaiseCreateV30Response::class);

        return $result['model'];
    }
}
