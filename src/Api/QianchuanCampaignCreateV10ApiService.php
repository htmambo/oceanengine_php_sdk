<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_campaign_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanCampaignCreateV10ApiService
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
     * 创建千川广告账户下的广告组
     */
    public function post(): ApiOpenApiV10QianchuanCampaignCreatePostRequest
    {
        return new ApiOpenApiV10QianchuanCampaignCreatePostRequest($this);
    }
}
