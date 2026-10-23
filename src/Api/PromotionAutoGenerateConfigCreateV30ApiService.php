<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_auto_generate_config_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionAutoGenerateConfigCreateV30ApiService
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
     * 用来保存广告主自定义的策略及物料，用于创意智能生成。创建时promotion_id选填，更新时promotion_id必填，多次更新返回的configid不变
     */
    public function post(): ApiOpenApiV30PromotionAutoGenerateConfigCreatePostRequest
    {
        return new ApiOpenApiV30PromotionAutoGenerateConfigCreatePostRequest($this);
    }
}
