<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_cost_protect_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionCostProtectStatusGetV30ApiService
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
     * 巨量2.0成本保障标查询接口
     */
    public function get(): ApiOpenApiV30PromotionCostProtectStatusGetGetRequest
    {
        return new ApiOpenApiV30PromotionCostProtectStatusGetGetRequest($this);
    }
}
