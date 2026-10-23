<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ad_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询AD品牌广告计划详情信息
 */
class ApiOpenApiV30BrandAdGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 分页参数 默认从1开始 */
    private ?int $page = null;
    /** @var int 分页参数 最大为100 */
    private ?int $size = null;
    /** @var string[] 计划ID List */
    private ?array $adIds = null;
    /** @var string[] 计划名称List */
    private ?array $adNames = null;
    /** @var string[] 广告组ID List */
    private ?array $campaignIds = null;
    /** @var \Oceanengine\Models\BrandAdGetV30AppOrigin 媒体端 */
    private ?\Oceanengine\Models\BrandAdGetV30AppOrigin $appOrigin = null;
    /** @var \Oceanengine\Models\BrandAdGetV30AdForm 版位 */
    private ?\Oceanengine\Models\BrandAdGetV30AdForm $adForm = null;
    /** @var \Oceanengine\Models\BrandAdGetV30AdStatus 广告计划状态 */
    private ?\Oceanengine\Models\BrandAdGetV30AdStatus $adStatus = null;
    /** @var string 创建起始时间 格式2023-01-01 00:00:00 */
    private ?string $createStartTime = null;
    /** @var string 创建截止时间 格式2023-01-01 00:00:00 */
    private ?string $createEndTime = null;
    /** @var string 投放起始时间 格式2023-01-01 00:00:00 */
    private ?string $startTime = null;
    /** @var string 投放截止时间 格式2023-01-01 00:00:00 */
    private ?string $endTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandAdGetV30ApiService $service)
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
     * 分页参数 最大为100
     */
    public function size(int $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * 计划ID List
     */
    public function adIds(array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * 计划名称List
     */
    public function adNames(array $adNames): self
    {
        $this->adNames = $adNames;
        return $this;
    }

    /**
     * 广告组ID List
     */
    public function campaignIds(array $campaignIds): self
    {
        $this->campaignIds = $campaignIds;
        return $this;
    }

    /**
     * 媒体端
     */
    public function appOrigin(\Oceanengine\Models\BrandAdGetV30AppOrigin $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * 版位
     */
    public function adForm(\Oceanengine\Models\BrandAdGetV30AdForm $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

    /**
     * 广告计划状态
     */
    public function adStatus(\Oceanengine\Models\BrandAdGetV30AdStatus $adStatus): self
    {
        $this->adStatus = $adStatus;
        return $this;
    }

    /**
     * 创建起始时间 格式2023-01-01 00:00:00
     */
    public function createStartTime(string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * 创建截止时间 格式2023-01-01 00:00:00
     */
    public function createEndTime(string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 投放起始时间 格式2023-01-01 00:00:00
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 投放截止时间 格式2023-01-01 00:00:00
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
     * 查询AD品牌广告计划详情信息
     */
    public function execute(): \Oceanengine\Models\BrandAdGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
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
        if ($this->adIds !== null) {
            $queryParams['ad_ids'] = $this->adIds;
        }
        if ($this->adNames !== null) {
            $queryParams['ad_names'] = $this->adNames;
        }
        if ($this->campaignIds !== null) {
            $queryParams['campaign_ids'] = $this->campaignIds;
        }
        if ($this->appOrigin !== null) {
            $__encoded0 = json_encode($this->appOrigin);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: appOrigin');
            }
            $queryParams['app_origin'] = $__encoded0;
        }
        if ($this->adForm !== null) {
            $__encoded1 = json_encode($this->adForm);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: adForm');
            }
            $queryParams['ad_form'] = $__encoded1;
        }
        if ($this->adStatus !== null) {
            $__encoded2 = json_encode($this->adStatus);
            if ($__encoded2 === false) {
                throw new \RuntimeException('Failed to encode parameter: adStatus');
            }
            $queryParams['ad_status'] = $__encoded2;
        }
        if ($this->createStartTime !== null) {
            $queryParams['create_start_time'] = $this->createStartTime;
        }
        if ($this->createEndTime !== null) {
            $queryParams['create_end_time'] = $this->createEndTime;
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
        $url = '/open_api/v3.0/brand/ad/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandAdGetV30Response::class);

        return $result['model'];
    }
}
