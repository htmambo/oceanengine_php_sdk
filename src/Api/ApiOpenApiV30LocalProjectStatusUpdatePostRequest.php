<?php

/**
 * 本文件由 go2php 生成，源: api_local_project_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 项目批量启停
 */
class ApiOpenApiV30LocalProjectStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalProjectStatusUpdateV30Request $localProjectStatusUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalProjectStatusUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localProjectStatusUpdateV30Request(\Oceanengine\Models\LocalProjectStatusUpdateV30Request $localProjectStatusUpdateV30Request): self
    {
        $this->localProjectStatusUpdateV30Request = $localProjectStatusUpdateV30Request;
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
     * 项目批量启停
     */
    public function execute(): \Oceanengine\Models\LocalProjectStatusUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localProjectStatusUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/project/status/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalProjectStatusUpdateV30Response::class);

        return $result['model'];
    }
}
