<?php

/**
 * 本文件由 go2php 生成，源: api_brand_tool_query_publish_price_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandToolQueryPublishPriceV30ApiService
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
     * 询价
     */
    public function get(): ApiOpenApiV30BrandToolQueryPublishPriceGetRequest
    {
        return new ApiOpenApiV30BrandToolQueryPublishPriceGetRequest($this);
    }
}
