<?php

/**
 * 本文件由 go2php 生成，源: api_report_brand_creative_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询AD品牌广告创意维度数据报表
 */
class ApiOpenApiV30ReportBrandCreativeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 分页参数 默认从1开始 */
    private ?int $page = null;
    /** @var int 分页参数 默认最大为100 */
    private ?int $size = null;
    /** @var int 推广目的 */
    private ?int $landingType = null;
    /** @var int 计费类型 */
    private ?int $pricingType = null;
    /** @var string[] 创意ID 默认每次请求最多100个 */
    private ?array $creativeIds = null;
    /** @var string 开始时间 格式2023-01-01 */
    private ?string $startTime = null;
    /** @var string 结束时间 格式2023-01-01 */
    private ?string $endTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportBrandCreativeGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 分页参数 默认从1开始
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 分页参数 默认最大为100
     */
    public function size(int $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * 推广目的
     */
    public function landingType(int $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * 计费类型
     */
    public function pricingType(int $pricingType): self
    {
        $this->pricingType = $pricingType;
        return $this;
    }

    /**
     * 创意ID 默认每次请求最多100个
     */
    public function creativeIds(array $creativeIds): self
    {
        $this->creativeIds = $creativeIds;
        return $this;
    }

    /**
     * 开始时间 格式2023-01-01
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 结束时间 格式2023-01-01
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
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
     * 查询AD品牌广告创意维度数据报表
     */
    public function execute(): \Oceanengine\Models\ReportBrandCreativeGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->page < 1) {
            throw new \InvalidArgumentException('page must be greater than 1');
        }
        if ($this->size === null) {
            throw new \InvalidArgumentException('size is required and must be specified');
        }
        if ($this->size > 100) {
            throw new \InvalidArgumentException('size must be less than 100');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->landingType !== null) {
            $queryParams['landing_type'] = $this->landingType;
        }
        if ($this->pricingType !== null) {
            $queryParams['pricing_type'] = $this->pricingType;
        }
        if ($this->creativeIds !== null) {
            $queryParams['creative_ids'] = $this->creativeIds;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        $queryParams['page'] = $this->page;
        $queryParams['size'] = $this->size;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/brand/creative/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportBrandCreativeGetV30Response::class);

        return $result['model'];
    }
}
