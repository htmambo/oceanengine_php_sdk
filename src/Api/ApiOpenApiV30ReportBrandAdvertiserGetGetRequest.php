<?php

/**
 * 本文件由 go2php 生成，源: api_report_brand_advertiser_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询广告主维度数据报表信息
 */
class ApiOpenApiV30ReportBrandAdvertiserGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string 开始时间 格式2023-01-01 */
    private ?string $startTime = null;
    /** @var string 结束时间 格式2023-01-01 */
    private ?string $endTime = null;
    /** @var int 分页参数 默认从1开始 */
    private ?int $page = null;
    /** @var int 分页参数 最大值100 */
    private ?int $size = null;
    /** @var \Oceanengine\Models\ReportBrandAdvertiserGetV30LandingType 推广目的 */
    private ?\Oceanengine\Models\ReportBrandAdvertiserGetV30LandingType $landingType = null;
    /** @var \Oceanengine\Models\ReportBrandAdvertiserGetV30PricingType 计费类型 */
    private ?\Oceanengine\Models\ReportBrandAdvertiserGetV30PricingType $pricingType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportBrandAdvertiserGetV30ApiService $service)
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

    /**
     * 分页参数 默认从1开始
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 分页参数 最大值100
     */
    public function size(int $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * 推广目的
     */
    public function landingType(\Oceanengine\Models\ReportBrandAdvertiserGetV30LandingType $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * 计费类型
     */
    public function pricingType(\Oceanengine\Models\ReportBrandAdvertiserGetV30PricingType $pricingType): self
    {
        $this->pricingType = $pricingType;
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
     * 查询广告主维度数据报表信息
     */
    public function execute(): \Oceanengine\Models\ReportBrandAdvertiserGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
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
            $__encoded0 = json_encode($this->landingType);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: landingType');
            }
            $queryParams['landing_type'] = $__encoded0;
        }
        if ($this->pricingType !== null) {
            $__encoded1 = json_encode($this->pricingType);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: pricingType');
            }
            $queryParams['pricing_type'] = $__encoded1;
        }
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        $queryParams['page'] = $this->page;
        $queryParams['size'] = $this->size;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/brand/advertiser/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportBrandAdvertiserGetV30Response::class);

        return $result['model'];
    }
}
