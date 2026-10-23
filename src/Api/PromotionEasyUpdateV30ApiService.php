<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_easy_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionEasyUpdateV30ApiService
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
     * 更新简单投广告
     */
    public function post(): ApiOpenApiV30PromotionEasyUpdatePostRequest
    {
        return new ApiOpenApiV30PromotionEasyUpdatePostRequest($this);
    }
}
