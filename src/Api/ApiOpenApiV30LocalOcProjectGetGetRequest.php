<?php

/**
 * 本文件由 go2php 生成，源: api_local_oc_project_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取OC项目详情
 */
class ApiOpenApiV30LocalOcProjectGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    private ?int $projectId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalOcProjectGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    public function projectId(int $projectId): self
    {
        $this->projectId = $projectId;
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
     * 获取OC项目详情
     */
    public function execute(): \Oceanengine\Models\LocalOcProjectGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->projectId === null) {
            throw new \InvalidArgumentException('projectId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['project_id'] = $this->projectId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/oc_project/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalOcProjectGetV30Response::class);

        return $result['model'];
    }
}
