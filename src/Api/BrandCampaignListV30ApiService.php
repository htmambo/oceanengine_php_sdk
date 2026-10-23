<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCampaignListV30ApiService
{
    private \Oceanengine\ApiClient $apiClient;

    public function __construct(\Oceanengine\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient(): \Oceanengine\ApiClient
    {
        return $this->apiClient;
    }

    /**
     * 查询AD品牌2.0广告组信息
     */
    public function get(): ApiOpenApiV30BrandCampaignListGetRequest
    {
        return new ApiOpenApiV30BrandCampaignListGetRequest($this);
    }
}
