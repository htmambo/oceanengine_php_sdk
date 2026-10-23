<?php

/**
 * 本文件由 go2php 生成，源: api_star_provider_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 服务商星川任务列表
 */
class ApiOpenApi2StarProviderTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 星图服务商ID */
    private ?int $starId = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 每页条数，最大20 */
    private ?int $pageSize = null;
    /** @var int 投放统计周期开始时间 */
    private ?int $statisticsStartTime = null;
    /** @var int 投放统计周期结束时间 */
    private ?int $statisticsEndTime = null;
    /** @var int[] 任务状态筛选，不传返回全部状态 */
    private ?array $orderStatus = null;
    /** @var string 任务名称 */
    private ?string $taskName = null;
    /** @var int 任务ID */
    private ?int $taskId = null;
    /** @var string 商品名称 */
    private ?string $productName = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarProviderTaskListV2ApiService $service)
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
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 每页条数，最大20
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 投放统计周期开始时间
     */
    public function statisticsStartTime(int $statisticsStartTime): self
    {
        $this->statisticsStartTime = $statisticsStartTime;
        return $this;
    }

    /**
     * 投放统计周期结束时间
     */
    public function statisticsEndTime(int $statisticsEndTime): self
    {
        $this->statisticsEndTime = $statisticsEndTime;
        return $this;
    }

    /**
     * 任务状态筛选，不传返回全部状态
     */
    public function orderStatus(array $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * 任务名称
     */
    public function taskName(string $taskName): self
    {
        $this->taskName = $taskName;
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
     * 商品名称
     */
    public function productName(string $productName): self
    {
        $this->productName = $productName;
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
     * 服务商星川任务列表
     */
    public function execute(): \Oceanengine\Models\StarProviderTaskListV2Response
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
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        if ($this->orderStatus !== null) {
            $queryParams['order_status'] = $this->orderStatus;
        }
        if ($this->taskName !== null) {
            $queryParams['task_name'] = $this->taskName;
        }
        if ($this->taskId !== null) {
            $queryParams['task_id'] = $this->taskId;
        }
        if ($this->productName !== null) {
            $queryParams['product_name'] = $this->productName;
        }
        $queryParams['statistics_start_time'] = $this->statisticsStartTime;
        $queryParams['statistics_end_time'] = $this->statisticsEndTime;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/provider/task/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarProviderTaskListV2Response::class);

        return $result['model'];
    }
}
