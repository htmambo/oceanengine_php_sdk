<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_product_available_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanProductAvailableGetV10ApiService
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
     * 获取千川账户下店铺内可投商品列表接口
     * 注意：仅支持商家广告主，不支持达人&机构广告主
     */
    public function get(): ApiOpenApiV10QianchuanProductAvailableGetGetRequest
    {
        return new ApiOpenApiV10QianchuanProductAvailableGetGetRequest($this);
    }
}
