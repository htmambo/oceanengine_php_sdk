<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_estimate_audience_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanToolsEstimateAudienceV10ApiService
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
     * 定向受众预估
     */
    public function get(): ApiOpenApiV10QianchuanToolsEstimateAudienceGetRequest
    {
        return new ApiOpenApiV10QianchuanToolsEstimateAudienceGetRequest($this);
    }
}
