<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_revoke_modify_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCampaignRevokeModifyV30ApiService
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
     * AD品牌2.0广告组取消撤改
     */
    public function post(): ApiOpenApiV30BrandCampaignRevokeModifyPostRequest
    {
        return new ApiOpenApiV30BrandCampaignRevokeModifyPostRequest($this);
    }
}
