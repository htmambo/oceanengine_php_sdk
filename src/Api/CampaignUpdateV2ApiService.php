<?php

/**
 * 本文件由 go2php 生成，源: api_campaign_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CampaignUpdateV2ApiService
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
     * API Description
     */
    public function post(): ApiOpenApi2CampaignUpdatePostRequest
    {
        return new ApiOpenApi2CampaignUpdatePostRequest($this);
    }
}
