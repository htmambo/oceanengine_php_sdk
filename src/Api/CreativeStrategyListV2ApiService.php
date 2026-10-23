<?php

/**
 * 本文件由 go2php 生成，源: api_creative_strategy_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CreativeStrategyListV2ApiService
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
     * 获取白盒策略列表，支持搜索
     */
    public function get(): ApiOpenApi2CreativeStrategyListGetRequest
    {
        return new ApiOpenApi2CreativeStrategyListGetRequest($this);
    }
}
