<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_participated_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 撮合中介-获取已参与任务列表
 */
class ApiOpenApi2StarMcnProviderGetParticipatedTaskGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?int $providerOrderTaskStatus = null;
    private ?int $providerTaskCategory = null;
    /** @var bool 是否筛选漫剧任务，false-不筛选，true-筛选 */
    private ?bool $isComicTask = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnProviderGetParticipatedTaskV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function providerOrderTaskStatus(int $providerOrderTaskStatus): self
    {
        $this->providerOrderTaskStatus = $providerOrderTaskStatus;
        return $this;
    }

    public function providerTaskCategory(int $providerTaskCategory): self
    {
        $this->providerTaskCategory = $providerTaskCategory;
        return $this;
    }

    /**
     * 是否筛选漫剧任务，false-不筛选，true-筛选
     */
    public function isComicTask(bool $isComicTask): self
    {
        $this->isComicTask = $isComicTask;
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
     * 撮合中介-获取已参与任务列表
     */
    public function execute(): \Oceanengine\Models\StarMcnProviderGetParticipatedTaskV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize < 1) {
            throw new \InvalidArgumentException('pageSize must be greater than 1');
        }
        if ($this->pageSize > 50) {
            throw new \InvalidArgumentException('pageSize must be less than 50');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        if ($this->providerOrderTaskStatus !== null) {
            $queryParams['provider_order_task_status'] = $this->providerOrderTaskStatus;
        }
        if ($this->providerTaskCategory !== null) {
            $queryParams['provider_task_category'] = $this->providerTaskCategory;
        }
        if ($this->isComicTask !== null) {
            $queryParams['is_comic_task'] = $this->isComicTask;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/provider_get_participated_task/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnProviderGetParticipatedTaskV2Response::class);

        return $result['model'];
    }
}
