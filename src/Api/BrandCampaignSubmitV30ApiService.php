<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCampaignSubmitV30ApiService
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
     * 品牌广告组下单
     */
    public function post(): ApiOpenApiV30BrandCampaignSubmitPostRequest
    {
        return new ApiOpenApiV30BrandCampaignSubmitPostRequest($this);
    }
}
