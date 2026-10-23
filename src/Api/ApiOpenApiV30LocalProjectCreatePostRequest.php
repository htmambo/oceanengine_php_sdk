<?php

/**
 * 本文件由 go2php 生成，源: api_local_project_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建项目
 */
class ApiOpenApiV30LocalProjectCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalProjectCreateV30Request $localProjectCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalProjectCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localProjectCreateV30Request(\Oceanengine\Models\LocalProjectCreateV30Request $localProjectCreateV30Request): self
    {
        $this->localProjectCreateV30Request = $localProjectCreateV30Request;
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
     * 创建项目
     */
    public function execute(): \Oceanengine\Models\LocalProjectCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localProjectCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/project/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalProjectCreateV30Response::class);

        return $result['model'];
    }
}
