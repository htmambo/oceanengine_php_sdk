<?php

/**
 * 本文件由 go2php 生成，源: api_tools_material_raise_stop_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 关停素材起量任务
 */
class ApiOpenApiV30ToolsMaterialRaiseStopPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsMaterialRaiseStopV30Request $toolsMaterialRaiseStopV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMaterialRaiseStopV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsMaterialRaiseStopV30Request(\Oceanengine\Models\ToolsMaterialRaiseStopV30Request $toolsMaterialRaiseStopV30Request): self
    {
        $this->toolsMaterialRaiseStopV30Request = $toolsMaterialRaiseStopV30Request;
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
     * 关停素材起量任务
     */
    public function execute(): \Oceanengine\Models\ToolsMaterialRaiseStopV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsMaterialRaiseStopV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/material_raise/stop/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMaterialRaiseStopV30Response::class);

        return $result['model'];
    }
}
