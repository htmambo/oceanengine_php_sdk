<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_deepbid_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionDeepbidUpdateV30ApiService
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
     * 创编2.0批量修改深度出价
     */
    public function post(): ApiOpenApiV30PromotionDeepbidUpdatePostRequest
    {
        return new ApiOpenApiV30PromotionDeepbidUpdatePostRequest($this);
    }
}
