<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_tag_on_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 星广服务商-视频标签查询
 */
class ApiOpenApi2StarMcnProviderGetTagOnTaskGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    /** @var int 任务id */
    private ?int $taskId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnProviderGetTagOnTaskV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 任务id
     */
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
     * 星广服务商-视频标签查询
     */
    public function execute(): \Oceanengine\Models\StarMcnProviderGetTagOnTaskV2Response
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
        $url = '/open_api/2/star/mcn/provider_get_tag_on_task/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnProviderGetTagOnTaskV2Response::class);

        return $result['model'];
    }
}
