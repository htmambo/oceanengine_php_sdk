<?php

/**
 * 本文件由 go2php 生成，源: api_std_project_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建项目
 */
class ApiOpenApiV30StdProjectCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StdProjectCreateV30Request $stdProjectCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StdProjectCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function stdProjectCreateV30Request(\Oceanengine\Models\StdProjectCreateV30Request $stdProjectCreateV30Request): self
    {
        $this->stdProjectCreateV30Request = $stdProjectCreateV30Request;
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
    public function execute(): \Oceanengine\Models\StdProjectCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->stdProjectCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/std_project/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StdProjectCreateV30Response::class);

        return $result['model'];
    }
}
