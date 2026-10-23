<?php

/**
 * 本文件由 go2php 生成，源: api_material_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量更新广告素材启用状态
 */
class ApiOpenApiV30MaterialStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\MaterialStatusUpdateV30Request $materialStatusUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(MaterialStatusUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function materialStatusUpdateV30Request(\Oceanengine\Models\MaterialStatusUpdateV30Request $materialStatusUpdateV30Request): self
    {
        $this->materialStatusUpdateV30Request = $materialStatusUpdateV30Request;
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
     * 批量更新广告素材启用状态
     */
    public function execute(): \Oceanengine\Models\MaterialStatusUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->materialStatusUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/material/status/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\MaterialStatusUpdateV30Response::class);

        return $result['model'];
    }
}
