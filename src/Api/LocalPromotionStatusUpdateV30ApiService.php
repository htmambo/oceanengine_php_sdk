<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalPromotionStatusUpdateV30ApiService
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
     * 批量广告状态更新
     */
    public function post(): ApiOpenApiV30LocalPromotionStatusUpdatePostRequest
    {
        return new ApiOpenApiV30LocalPromotionStatusUpdatePostRequest($this);
    }
}
