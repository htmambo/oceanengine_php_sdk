<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalPromotionListV30ApiService
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
     * 拉取项目列表接口，支持各种筛选
     */
    public function get(): ApiOpenApiV30LocalPromotionListGetRequest
    {
        return new ApiOpenApiV30LocalPromotionListGetRequest($this);
    }
}
