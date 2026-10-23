<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询AD品牌2.0广告组信息
 */
class ApiOpenApiV30BrandCampaignListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\BrandCampaignListV30Filter 过滤条件 */
    private ?\Oceanengine\Models\BrandCampaignListV30Filter $filter = null;
    /** @var \Oceanengine\Models\BrandCampaignListV30PageInfo 分页信息 */
    private ?\Oceanengine\Models\BrandCampaignListV30PageInfo $pageInfo = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCampaignListV30ApiService $service)
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
     * 过滤条件
     */
    public function filter(\Oceanengine\Models\BrandCampaignListV30Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * 分页信息
     */
    public function pageInfo(\Oceanengine\Models\BrandCampaignListV30PageInfo $pageInfo): self
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
     * 查询AD品牌2.0广告组信息
     */
    public function execute(): \Oceanengine\Models\BrandCampaignListV30Response
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
        if ($this->pageInfo !== null) {
            $__encoded1 = json_encode($this->pageInfo);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageInfo');
            }
            $queryParams['page_info'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/campaign/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCampaignListV30Response::class);

        return $result['model'];
    }
}
