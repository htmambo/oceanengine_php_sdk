<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_name_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionNameUpdateV30ApiService
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
     * update promotion name
     */
    public function post(): ApiOpenApiV30PromotionNameUpdatePostRequest
    {
        return new ApiOpenApiV30PromotionNameUpdatePostRequest($this);
    }
}
