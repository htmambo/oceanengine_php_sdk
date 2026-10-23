<?php

/**
 * 本文件由 go2php 生成，源: api_file_material_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取用户素材列表，支持素材属性标签筛选/
 */
class ApiOpenApi2FileMaterialListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主 id */
    private ?int $advertiserId = null;
    /** @var string 素材来源，允许值： QIANCHUAN 千川 AD 广告平台 */
    private ?string $materialSource = null;
    /** @var string[] 素材标签过滤项， 允许值： INEFFICIENT_MATERIAL低效素材； SIMILAR_MATERIAL 同质化挤压严重素材； SIMILAR_QUEUE_MATERIAL 同质化素材风险-排队投放素材 AD_HIGH_QUALITY_MATERIAL AD 优质素材 ECP_HIGH_QUALITY_MATERIAL 千川优质素材 FIRST_PUBLISH_MATERIAL  首发素材 如果不传，则默认为全部素材标签 */
    private ?array $propertiesFilter = null;
    /** @var string 素材创建时间，格式为yyyy-mm-dd HH:MM:SS， 最早允许传入时间：2022-01-01 00:00:00 */
    private ?string $startTime = null;
    /** @var string 素材结束时间，格式为yyyy-mm-dd HH:MM:SS */
    private ?string $endTime = null;
    /** @var int 页数默认值: 1 */
    private ?int $page = null;
    /** @var int 页面大小默认值:10, 最大值：3000 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileMaterialListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主 id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 素材来源，允许值： QIANCHUAN 千川 AD 广告平台
     */
    public function materialSource(string $materialSource): self
    {
        $this->materialSource = $materialSource;
        return $this;
    }

    /**
     * 素材标签过滤项， 允许值： INEFFICIENT_MATERIAL低效素材； SIMILAR_MATERIAL 同质化挤压严重素材； SIMILAR_QUEUE_MATERIAL 同质化素材风险-排队投放素材 AD_HIGH_QUALITY_MATERIAL AD 优质素材 ECP_HIGH_QUALITY_MATERIAL 千川优质素材 FIRST_PUBLISH_MATERIAL  首发素材 如果不传，则默认为全部素材标签
     */
    public function propertiesFilter(array $propertiesFilter): self
    {
        $this->propertiesFilter = $propertiesFilter;
        return $this;
    }

    /**
     * 素材创建时间，格式为yyyy-mm-dd HH:MM:SS， 最早允许传入时间：2022-01-01 00:00:00
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 素材结束时间，格式为yyyy-mm-dd HH:MM:SS
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 页数默认值: 1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小默认值:10, 最大值：3000
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
     * 获取用户素材列表，支持素材属性标签筛选/
     */
    public function execute(): \Oceanengine\Models\FileMaterialListV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->materialSource === null) {
            throw new \InvalidArgumentException('materialSource is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['material_source'] = $this->materialSource;
        if ($this->propertiesFilter !== null) {
            $queryParams['properties_filter'] = $this->propertiesFilter;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/material/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileMaterialListV2Response::class);

        return $result['model'];
    }
}
