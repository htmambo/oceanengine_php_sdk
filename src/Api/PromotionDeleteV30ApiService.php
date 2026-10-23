<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionDeleteV30ApiService
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
     * API Description
     */
    public function post(): ApiOpenApiV30PromotionDeletePostRequest
    {
        return new ApiOpenApiV30PromotionDeletePostRequest($this);
    }
}
