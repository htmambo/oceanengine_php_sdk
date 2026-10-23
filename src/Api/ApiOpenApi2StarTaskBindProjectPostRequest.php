<?php

/**
 * 本文件由 go2php 生成，源: api_star_task_bind_project_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 绑定任务至项目
 */
class ApiOpenApi2StarTaskBindProjectPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarTaskBindProjectV2Request $starTaskBindProjectV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarTaskBindProjectV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starTaskBindProjectV2Request(\Oceanengine\Models\StarTaskBindProjectV2Request $starTaskBindProjectV2Request): self
    {
        $this->starTaskBindProjectV2Request = $starTaskBindProjectV2Request;
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
     * 绑定任务至项目
     */
    public function execute(): \Oceanengine\Models\StarTaskBindProjectV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starTaskBindProjectV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/task/bind_project/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarTaskBindProjectV2Response::class);

        return $result['model'];
    }
}
