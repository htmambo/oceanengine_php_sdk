<?php

/**
 * 本文件由 go2php 生成，源: api_project_name_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新project的名称
 */
class ApiOpenApiV30ProjectNameUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ProjectNameUpdateV30Request $projectNameUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectNameUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function projectNameUpdateV30Request(\Oceanengine\Models\ProjectNameUpdateV30Request $projectNameUpdateV30Request): self
    {
        $this->projectNameUpdateV30Request = $projectNameUpdateV30Request;
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
     * 更新project的名称
     */
    public function execute(): \Oceanengine\Models\ProjectNameUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->projectNameUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/project_name/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectNameUpdateV30Response::class);

        return $result['model'];
    }
}
