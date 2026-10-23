<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_smart_boost_ad_boost_status_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanToolsSmartBoostAdBoostStatusGetV10ApiService
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
     * https://bytedance.feishu.cn/wiki/wikcnq0rDUKyzKVSPWUAt6EJD4b
     */
    public function get(): ApiOpenApiV10QianchuanToolsSmartBoostAdBoostStatusGetGetRequest
    {
        return new ApiOpenApiV10QianchuanToolsSmartBoostAdBoostStatusGetGetRequest($this);
    }
}
