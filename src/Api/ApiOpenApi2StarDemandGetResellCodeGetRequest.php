<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_get_resell_code_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 客户获取自定义投稿任务分销口令码
 */
class ApiOpenApi2StarDemandGetResellCodeGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $taskId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandGetResellCodeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    public function taskId(int $taskId): self
    {
        $this->taskId = $taskId;
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
     * 客户获取自定义投稿任务分销口令码
     */
    public function execute(): \Oceanengine\Models\StarDemandGetResellCodeV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->taskId === null) {
            throw new \InvalidArgumentException('taskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['task_id'] = $this->taskId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/get_resell_code/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandGetResellCodeV2Response::class);

        return $result['model'];
    }
}
