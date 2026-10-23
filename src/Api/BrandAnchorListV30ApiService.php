<?php

/**
 * 本文件由 go2php 生成，源: api_brand_anchor_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandAnchorListV30ApiService
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
     * 查询锚点
     */
    public function get(): ApiOpenApiV30BrandAnchorListGetRequest
    {
        return new ApiOpenApiV30BrandAnchorListGetRequest($this);
    }
}
