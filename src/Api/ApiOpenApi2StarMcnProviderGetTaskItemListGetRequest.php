<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_task_item_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取投后数据信息
 */
class ApiOpenApi2StarMcnProviderGetTaskItemListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $taskId = null;
    private ?int $page = null;
    private ?int $limit = null;
    /** @var bool 筛选待客户确认视频 */
    private ?bool $providerConfirming = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnProviderGetTaskItemListV2ApiService $service)
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

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function limit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * 筛选待客户确认视频
     */
    public function providerConfirming(bool $providerConfirming): self
    {
        $this->providerConfirming = $providerConfirming;
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
     * 获取投后数据信息
     */
    public function execute(): \Oceanengine\Models\StarMcnProviderGetTaskItemListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->taskId === null) {
            throw new \InvalidArgumentException('taskId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->page < 1) {
            throw new \InvalidArgumentException('page must be greater than 1');
        }
        if ($this->limit === null) {
            throw new \InvalidArgumentException('limit is required and must be specified');
        }
        if ($this->limit < 1) {
            throw new \InvalidArgumentException('limit must be greater than 1');
        }
        if ($this->limit > 30) {
            throw new \InvalidArgumentException('limit must be less than 30');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['task_id'] = $this->taskId;
        $queryParams['page'] = $this->page;
        $queryParams['limit'] = $this->limit;
        if ($this->providerConfirming !== null) {
            $queryParams['provider_confirming'] = $this->providerConfirming;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/provider_get_task_item_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnProviderGetTaskItemListV2Response::class);

        return $result['model'];
    }
}
