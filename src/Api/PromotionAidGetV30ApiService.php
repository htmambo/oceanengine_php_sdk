<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_aid_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionAidGetV30ApiService
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
     * 获取2.0广告下真实的计划和创意信息
     */
    public function get(): ApiOpenApiV30PromotionAidGetGetRequest
    {
        return new ApiOpenApiV30PromotionAidGetGetRequest($this);
    }
}
