<?php

/**
 * 本文件由 go2php 生成，源: api_penalty_task_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询客户扣罚单
 */
class ApiOpenApiV30PenaltyTaskGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 广告主id */
    private ?array $advertiserIds = null;
    /** @var int[] 客户id */
    private ?array $customerIds = null;
    /** @var string 封停开始时间（例：2025-09-24 16:18:46） */
    private ?string $disposalStartTime = null;
    /** @var string 封停结束时间（例：2030-12-31 23:59:59） */
    private ?string $disposalEndTime = null;
    /** @var int 当前页码，默认为 1 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PenaltyTaskGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 客户id
     */
    public function customerIds(array $customerIds): self
    {
        $this->customerIds = $customerIds;
        return $this;
    }

    /**
     * 封停开始时间（例：2025-09-24 16:18:46）
     */
    public function disposalStartTime(string $disposalStartTime): self
    {
        $this->disposalStartTime = $disposalStartTime;
        return $this;
    }

    /**
     * 封停结束时间（例：2030-12-31 23:59:59）
     */
    public function disposalEndTime(string $disposalEndTime): self
    {
        $this->disposalEndTime = $disposalEndTime;
        return $this;
    }

    /**
     * 当前页码，默认为 1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
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
     * 查询客户扣罚单
     */
    public function execute(): \Oceanengine\Models\PenaltyTaskGetV30Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        if (count($this->advertiserIds) < 1) {
            throw new \InvalidArgumentException('advertiserIds must have at least 1 elements');
        }
        if (count($this->advertiserIds) > 20) {
            throw new \InvalidArgumentException('advertiserIds must have less than 20 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        if ($this->customerIds !== null) {
            $queryParams['customer_ids'] = $this->customerIds;
        }
        if ($this->disposalStartTime !== null) {
            $queryParams['disposal_start_time'] = $this->disposalStartTime;
        }
        if ($this->disposalEndTime !== null) {
            $queryParams['disposal_end_time'] = $this->disposalEndTime;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/penalty_task/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PenaltyTaskGetV30Response::class);

        return $result['model'];
    }
}
