<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_auto_generate_config_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionAutoGenerateConfigGetV30ApiService
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
     * 根据配置ID，查询配置详情
     */
    public function get(): ApiOpenApiV30PromotionAutoGenerateConfigGetGetRequest
    {
        return new ApiOpenApiV30PromotionAutoGenerateConfigGetGetRequest($this);
    }
}
