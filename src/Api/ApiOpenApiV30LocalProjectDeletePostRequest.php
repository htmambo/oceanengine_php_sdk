<?php

/**
 * 本文件由 go2php 生成，源: api_local_project_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除项目
 */
class ApiOpenApiV30LocalProjectDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalProjectDeleteV30Request $localProjectDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalProjectDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localProjectDeleteV30Request(\Oceanengine\Models\LocalProjectDeleteV30Request $localProjectDeleteV30Request): self
    {
        $this->localProjectDeleteV30Request = $localProjectDeleteV30Request;
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
     * 删除项目
     */
    public function execute(): \Oceanengine\Models\LocalProjectDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localProjectDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/project/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalProjectDeleteV30Response::class);

        return $result['model'];
    }
}
