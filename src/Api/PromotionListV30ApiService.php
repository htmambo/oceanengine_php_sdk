<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionListV30ApiService
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
     * 创编2.0广告列表
     */
    public function get(): ApiOpenApiV30PromotionListGetRequest
    {
        return new ApiOpenApiV30PromotionListGetRequest($this);
    }
}
