<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_batch_campaign_status_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanBatchCampaignStatusUpdateV10ApiService
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
     * 此接口用于更新当前千川广告账户下的广告组的状态。
     */
    public function post(): ApiOpenApiV10QianchuanBatchCampaignStatusUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanBatchCampaignStatusUpdatePostRequest($this);
    }
}
