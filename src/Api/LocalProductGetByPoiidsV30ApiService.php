<?php

/**
 * 本文件由 go2php 生成，源: api_local_product_get_by_poiids_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalProductGetByPoiidsV30ApiService
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
     * 根据门店ID拉取商品
     */
    public function get(): ApiOpenApiV30LocalProductGetByPoiidsGetRequest
    {
        return new ApiOpenApiV30LocalProductGetByPoiidsGetRequest($this);
    }
}
