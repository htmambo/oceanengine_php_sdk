<?php

/**
 * 本文件由 go2php 生成，源: api_star_star_ad_unite_task_item_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星广联投(星图版)视频维度数据
 */
class ApiOpenApi2StarStarAdUniteTaskItemListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户的星图id */
    private ?int $starId = null;
    /** @var string 查询起始时间，格式yyyy-mm-dd，只和播放量、转化数、预估消耗相关 */
    private ?string $statStartDate = null;
    /** @var string 查询截止时间，格式yyyy-mm-dd，只和播放量、转化数、预估实时消耗相关 */
    private ?string $statEndDate = null;
    /** @var int 任务id */
    private ?int $demandId = null;
    /** @var int 页码，默认为1 */
    private ?int $page = null;
    /** @var int 页面大小，默认10，最大值20 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarStarAdUniteTaskItemListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户的星图id
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 查询起始时间，格式yyyy-mm-dd，只和播放量、转化数、预估消耗相关
     */
    public function statStartDate(string $statStartDate): self
    {
        $this->statStartDate = $statStartDate;
        return $this;
    }

    /**
     * 查询截止时间，格式yyyy-mm-dd，只和播放量、转化数、预估实时消耗相关
     */
    public function statEndDate(string $statEndDate): self
    {
        $this->statEndDate = $statEndDate;
        return $this;
    }

    /**
     * 任务id
     */
    public function demandId(int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 页码，默认为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认10，最大值20
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
     * 获取星广联投(星图版)视频维度数据
     */
    public function execute(): \Oceanengine\Models\StarStarAdUniteTaskItemListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->statStartDate === null) {
            throw new \InvalidArgumentException('statStartDate is required and must be specified');
        }
        if ($this->statEndDate === null) {
            throw new \InvalidArgumentException('statEndDate is required and must be specified');
        }
        if ($this->demandId === null) {
            throw new \InvalidArgumentException('demandId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $queryParams['stat_start_date'] = $this->statStartDate;
        $queryParams['stat_end_date'] = $this->statEndDate;
        $queryParams['demand_id'] = $this->demandId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/star_ad_unite_task_item/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarStarAdUniteTaskItemListV2Response::class);

        return $result['model'];
    }
}
