<?php

/**
 * 本文件由 go2php 生成，源: api_project_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投放2.0更新项目
 */
class ApiOpenApiV30ProjectUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ProjectUpdateV30Request $projectUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function projectUpdateV30Request(\Oceanengine\Models\ProjectUpdateV30Request $projectUpdateV30Request): self
    {
        $this->projectUpdateV30Request = $projectUpdateV30Request;
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
     * 投放2.0更新项目
     */
    public function execute(): \Oceanengine\Models\ProjectUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->projectUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/project/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectUpdateV30Response::class);

        return $result['model'];
    }
}
