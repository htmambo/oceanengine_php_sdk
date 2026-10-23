<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCampaignUpdateV30ApiService
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
     * 品牌2.0修改广告组
     */
    public function post(): ApiOpenApiV30BrandCampaignUpdatePostRequest
    {
        return new ApiOpenApiV30BrandCampaignUpdatePostRequest($this);
    }
}
