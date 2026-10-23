<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_cost_protect_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalPromotionCostProtectStatusGetV30ApiService
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
     * 获取单元成本保障状态
     */
    public function get(): ApiOpenApiV30LocalPromotionCostProtectStatusGetGetRequest
    {
        return new ApiOpenApiV30LocalPromotionCostProtectStatusGetGetRequest($this);
    }
}
