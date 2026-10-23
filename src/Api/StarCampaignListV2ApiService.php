<?php

/**
 * 本文件由 go2php 生成，源: api_star_campaign_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarCampaignListV2ApiService
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
     * 获取需求列表
     */
    public function get(): ApiOpenApi2StarCampaignListGetRequest
    {
        return new ApiOpenApi2StarCampaignListGetRequest($this);
    }
}
