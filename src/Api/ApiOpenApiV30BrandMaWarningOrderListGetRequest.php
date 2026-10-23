<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_warning_order_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询账户预警信息
 */
class ApiOpenApiV30BrandMaWarningOrderListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 目标广告主 ID */
    private ?array $advertiserIds = null;
    /** @var string 预定单投放开始时间：yyyy-MM-dd */
    private ?string $startTime = null;
    /** @var string 预定单投放结束时间：yyyy-MM-dd */
    private ?string $endTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandMaWarningOrderListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 目标广告主 ID
     */
    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 预定单投放开始时间：yyyy-MM-dd
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 预定单投放结束时间：yyyy-MM-dd
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
     * 查询账户预警信息
     */
    public function execute(): \Oceanengine\Models\BrandMaWarningOrderListV30Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/ma/warning_order/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandMaWarningOrderListV30Response::class);

        return $result['model'];
    }
}
