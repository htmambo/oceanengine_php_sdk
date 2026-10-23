<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_material_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionMaterialDeleteV30ApiService
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
     * 删除一个promotion下的多个素材
     */
    public function post(): ApiOpenApiV30PromotionMaterialDeletePostRequest
    {
        return new ApiOpenApiV30PromotionMaterialDeletePostRequest($this);
    }
}
