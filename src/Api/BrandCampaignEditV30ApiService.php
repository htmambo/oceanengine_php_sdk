<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_edit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCampaignEditV30ApiService
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
     * AD品牌广告组编辑
     */
    public function post(): ApiOpenApiV30BrandCampaignEditPostRequest
    {
        return new ApiOpenApiV30BrandCampaignEditPostRequest($this);
    }
}
