<?php

/**
 * 本文件由 go2php 生成，源: api_brand_creative_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询AD品牌广告创意详情
 */
class ApiOpenApiV30BrandCreativeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 分页参数 默认从1开始 */
    private ?int $page = null;
    /** @var int 分页参数 每页最大100个结果 */
    private ?int $size = null;
    /** @var string[] 计划ID  每次查询最多100个 */
    private ?array $adIds = null;
    /** @var string[] 广告组ID 每次查询最多100个 */
    private ?array $campaignIds = null;
    /** @var string[] 广告创意ID */
    private ?array $creativeIds = null;
    /** @var \Oceanengine\Models\BrandCreativeGetV30CreativeStatus 广告创意状态 */
    private ?\Oceanengine\Models\BrandCreativeGetV30CreativeStatus $creativeStatus = null;
    /** @var string 创建起始时间 格式2023-01-01 00:00:00 */
    private ?string $createStartTime = null;
    /** @var string 创建截止时间 格式2023-01-01 00:00:00 */
    private ?string $createEndTime = null;
    /** @var string 起始投放时间 格式2023-01-01 00:00:00 */
    private ?string $startTime = null;
    /** @var string 截止投放时间 格式2023-01-01 00:00:00 */
    private ?string $endTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCreativeGetV30ApiService $service)
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
     * 分页参数 每页最大100个结果
     */
    public function size(int $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * 计划ID  每次查询最多100个
     */
    public function adIds(array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * 广告组ID 每次查询最多100个
     */
    public function campaignIds(array $campaignIds): self
    {
        $this->campaignIds = $campaignIds;
        return $this;
    }

    /**
     * 广告创意ID
     */
    public function creativeIds(array $creativeIds): self
    {
        $this->creativeIds = $creativeIds;
        return $this;
    }

    /**
     * 广告创意状态
     */
    public function creativeStatus(\Oceanengine\Models\BrandCreativeGetV30CreativeStatus $creativeStatus): self
    {
        $this->creativeStatus = $creativeStatus;
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
     * 起始投放时间 格式2023-01-01 00:00:00
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 截止投放时间 格式2023-01-01 00:00:00
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
     * 查询AD品牌广告创意详情
     */
    public function execute(): \Oceanengine\Models\BrandCreativeGetV30Response
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
        if ($this->adIds !== null) {
            $queryParams['ad_ids'] = $this->adIds;
        }
        if ($this->campaignIds !== null) {
            $queryParams['campaign_ids'] = $this->campaignIds;
        }
        if ($this->creativeIds !== null) {
            $queryParams['creative_ids'] = $this->creativeIds;
        }
        if ($this->creativeStatus !== null) {
            $__encoded0 = json_encode($this->creativeStatus);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: creativeStatus');
            }
            $queryParams['creative_status'] = $__encoded0;
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
        $url = '/open_api/v3.0/brand/creative/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCreativeGetV30Response::class);

        return $result['model'];
    }
}
