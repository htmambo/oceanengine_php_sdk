<?php

/**
 * 本文件由 go2php 生成，源: api_ad_convert_attribution_query_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdConvertAttributionQueryCreateV2ApiService
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
     * 对实时归因接口进行鉴权
     */
    public function post(): ApiOpenApi2AdConvertAttributionQueryCreatePostRequest
    {
        return new ApiOpenApi2AdConvertAttributionQueryCreatePostRequest($this);
    }
}
