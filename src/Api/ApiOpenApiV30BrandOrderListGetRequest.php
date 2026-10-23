<?php

/**
 * 本文件由 go2php 生成，源: api_brand_order_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询品牌2.0预订单信息
 */
class ApiOpenApiV30BrandOrderListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    private ?\Oceanengine\Models\BrandOrderListV30Filter $filter = null;
    /** @var \Oceanengine\Models\BrandOrderListV30CampaignFilter 广告组过滤条件 */
    private ?\Oceanengine\Models\BrandOrderListV30CampaignFilter $campaignFilter = null;
    private ?\Oceanengine\Models\BrandOrderListV30PageInfo $pageInfo = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandOrderListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function filter(\Oceanengine\Models\BrandOrderListV30Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * 广告组过滤条件
     */
    public function campaignFilter(\Oceanengine\Models\BrandOrderListV30CampaignFilter $campaignFilter): self
    {
        $this->campaignFilter = $campaignFilter;
        return $this;
    }

    public function pageInfo(\Oceanengine\Models\BrandOrderListV30PageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
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
     * 查询品牌2.0预订单信息
     */
    public function execute(): \Oceanengine\Models\BrandOrderListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        if ($this->campaignFilter !== null) {
            $__encoded1 = json_encode($this->campaignFilter);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: campaignFilter');
            }
            $queryParams['campaign_filter'] = $__encoded1;
        }
        if ($this->pageInfo !== null) {
            $__encoded2 = json_encode($this->pageInfo);
            if ($__encoded2 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageInfo');
            }
            $queryParams['page_info'] = $__encoded2;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/order/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandOrderListV30Response::class);

        return $result['model'];
    }
}
