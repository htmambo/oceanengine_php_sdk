<?php

/**
 * 本文件由 go2php 生成，源: api_star_star_ad_unite_task_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星广联投(星图版)任务维度数据
 */
class ApiOpenApi2StarStarAdUniteTaskDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户的星图id */
    private ?int $starId = null;
    /** @var int 任务id */
    private ?int $demandId = null;
    /** @var string 查询起始时间，格式：yyyy-mm-dd ，只和安卓/iOS消耗、转化数、深度转化数相关 */
    private ?string $statStartDate = null;
    /** @var string 查询截止时间，格式：yyyy-mm-dd ，只和安卓/iOS消耗、转化数、深度转化数相关 */
    private ?string $statEndDate = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarStarAdUniteTaskDetailV2ApiService $service)
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
     * 任务id
     */
    public function demandId(int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 查询起始时间，格式：yyyy-mm-dd ，只和安卓/iOS消耗、转化数、深度转化数相关
     */
    public function statStartDate(string $statStartDate): self
    {
        $this->statStartDate = $statStartDate;
        return $this;
    }

    /**
     * 查询截止时间，格式：yyyy-mm-dd ，只和安卓/iOS消耗、转化数、深度转化数相关
     */
    public function statEndDate(string $statEndDate): self
    {
        $this->statEndDate = $statEndDate;
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
     * 获取星广联投(星图版)任务维度数据
     */
    public function execute(): \Oceanengine\Models\StarStarAdUniteTaskDetailV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->demandId === null) {
            throw new \InvalidArgumentException('demandId is required and must be specified');
        }
        if ($this->statStartDate === null) {
            throw new \InvalidArgumentException('statStartDate is required and must be specified');
        }
        if ($this->statEndDate === null) {
            throw new \InvalidArgumentException('statEndDate is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['demand_id'] = $this->demandId;
        $queryParams['stat_start_date'] = $this->statStartDate;
        $queryParams['stat_end_date'] = $this->statEndDate;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/star_ad_unite_task/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarStarAdUniteTaskDetailV2Response::class);

        return $result['model'];
    }
}
