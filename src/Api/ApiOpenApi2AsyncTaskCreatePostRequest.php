<?php

/**
 * 本文件由 go2php 生成，源: api_async_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 异步数据报表-创建异步任务
 */
class ApiOpenApi2AsyncTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AsyncTaskCreateV2Request $asyncTaskCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AsyncTaskCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function asyncTaskCreateV2Request(\Oceanengine\Models\AsyncTaskCreateV2Request $asyncTaskCreateV2Request): self
    {
        $this->asyncTaskCreateV2Request = $asyncTaskCreateV2Request;
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
     * 异步数据报表-创建异步任务
     */
    public function execute(): \Oceanengine\Models\AsyncTaskCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->asyncTaskCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/async_task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AsyncTaskCreateV2Response::class);

        return $result['model'];
    }
}
