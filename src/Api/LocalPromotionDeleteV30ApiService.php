<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalPromotionDeleteV30ApiService
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
     * 删除单元
     */
    public function post(): ApiOpenApiV30LocalPromotionDeletePostRequest
    {
        return new ApiOpenApiV30LocalPromotionDeletePostRequest($this);
    }
}
