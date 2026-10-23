<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_overall_marketing_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdOverallMarketingUpdateV10ApiService
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
     * 全域计划升级为乘方计划
     */
    public function post(): ApiOpenApiV10QianchuanAdOverallMarketingUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanAdOverallMarketingUpdatePostRequest($this);
    }
}
