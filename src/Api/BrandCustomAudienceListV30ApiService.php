<?php

/**
 * 本文件由 go2php 生成，源: api_brand_custom_audience_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCustomAudienceListV30ApiService
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
     * 查询品牌可用人群包
     */
    public function get(): ApiOpenApiV30BrandCustomAudienceListGetRequest
    {
        return new ApiOpenApiV30BrandCustomAudienceListGetRequest($this);
    }
}
