<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_get_car_brand_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemanderGetCarBrandListV2ApiService
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
     * 获取全量车系信息
     */
    public function get(): ApiOpenApi2StarDemanderGetCarBrandListGetRequest
    {
        return new ApiOpenApi2StarDemanderGetCarBrandListGetRequest($this);
    }
}
