<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_star_product_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanOverallStarProductGetV10ApiService
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
     * 获取直播-乘方星选素材可投商品
     */
    public function get(): ApiOpenApiV10QianchuanOverallStarProductGetGetRequest
    {
        return new ApiOpenApiV10QianchuanOverallStarProductGetGetRequest($this);
    }
}
