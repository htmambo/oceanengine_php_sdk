<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalPromotionUpdateV30ApiService
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
     * 广告更新
     */
    public function post(): ApiOpenApiV30LocalPromotionUpdatePostRequest
    {
        return new ApiOpenApiV30LocalPromotionUpdatePostRequest($this);
    }
}
