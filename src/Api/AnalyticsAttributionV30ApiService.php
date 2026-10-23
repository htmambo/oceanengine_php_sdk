<?php

/**
 * 本文件由 go2php 生成，源: api_analytics_attribution_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AnalyticsAttributionV30ApiService
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
     * 该接口主要承接广告主上传需要巨量引擎归因事件，当前仅支持biz_type=4，包含引流电商PA深转归因实时回传和引流电商点击时间回传。
     */
    public function post(): ApiOpenApiV30AnalyticsAttributionPostRequest
    {
        return new ApiOpenApiV30AnalyticsAttributionPostRequest($this);
    }
}
