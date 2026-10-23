<?php

/**
 * 本文件由 go2php 生成，源: api_star_provider_task_item_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 星川服务商视频列表接口
 */
class ApiOpenApi2StarProviderTaskItemListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 星图服务商ID */
    private ?int $starId = null;
    /** @var int 任务ID */
    private ?int $taskId = null;
    /** @var int 投放统计周期开始时间，毫秒级时间戳 */
    private ?int $statisticsStartTime = null;
    /** @var int 投放统计周期结束时间，毫秒级时间戳 */
    private ?int $statisticsEndTime = null;
    /** @var string 视频ID 或者 视频标题 */
    private ?string $itemSearchKey = null;
    /** @var int[] 视频投放状态 */
    private ?array $itemStatus = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 每页条数 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarProviderTaskItemListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 星图服务商ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 任务ID
     */
    public function taskId(int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * 投放统计周期开始时间，毫秒级时间戳
     */
    public function statisticsStartTime(int $statisticsStartTime): self
    {
        $this->statisticsStartTime = $statisticsStartTime;
        return $this;
    }

    /**
     * 投放统计周期结束时间，毫秒级时间戳
     */
    public function statisticsEndTime(int $statisticsEndTime): self
    {
        $this->statisticsEndTime = $statisticsEndTime;
        return $this;
    }

    /**
     * 视频ID 或者 视频标题
     */
    public function itemSearchKey(string $itemSearchKey): self
    {
        $this->itemSearchKey = $itemSearchKey;
        return $this;
    }

    /**
     * 视频投放状态
     */
    public function itemStatus(array $itemStatus): self
    {
        $this->itemStatus = $itemStatus;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 每页条数
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 星川服务商视频列表接口
     */
    public function execute(): \Oceanengine\Models\StarProviderTaskItemListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->taskId === null) {
            throw new \InvalidArgumentException('taskId is required and must be specified');
        }
        if ($this->statisticsStartTime === null) {
            throw new \InvalidArgumentException('statisticsStartTime is required and must be specified');
        }
        if ($this->statisticsEndTime === null) {
            throw new \InvalidArgumentException('statisticsEndTime is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['task_id'] = $this->taskId;
        if ($this->itemSearchKey !== null) {
            $queryParams['item_search_key'] = $this->itemSearchKey;
        }
        if ($this->itemStatus !== null) {
            $queryParams['item_status'] = $this->itemStatus;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $queryParams['statistics_start_time'] = $this->statisticsStartTime;
        $queryParams['statistics_end_time'] = $this->statisticsEndTime;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/provider/task/item/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarProviderTaskItemListV2Response::class);

        return $result['model'];
    }
}
