<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_remove_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCampaignRemoveV30ApiService
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
     * AD品牌2.0删除广告组
     */
    public function post(): ApiOpenApiV30BrandCampaignRemovePostRequest
    {
        return new ApiOpenApiV30BrandCampaignRemovePostRequest($this);
    }
}
