<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCampaignDeleteV30ApiService
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
     * AD品牌广告组删除
     */
    public function post(): ApiOpenApiV30BrandCampaignDeletePostRequest
    {
        return new ApiOpenApiV30BrandCampaignDeletePostRequest($this);
    }
}
