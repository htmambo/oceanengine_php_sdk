<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_campaign_list_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanCampaignListGetV10ApiService
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
     * 本接口用于获取账户下的广告组列表
     */
    public function get(): ApiOpenApiV10QianchuanCampaignListGetGetRequest
    {
        return new ApiOpenApiV10QianchuanCampaignListGetGetRequest($this);
    }
}
