<?php

/**
 * 本文件由 go2php 生成，源: api_ad_cost_protect_status_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdCostProtectStatusGetV2ApiService
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
     * 获取成本保障状态及时同步广告主计划投放状态，可以获取计划是否处于保障中，满足赔付规则
     */
    public function get(): ApiOpenApi2AdCostProtectStatusGetGetRequest
    {
        return new ApiOpenApi2AdCostProtectStatusGetGetRequest($this);
    }
}
