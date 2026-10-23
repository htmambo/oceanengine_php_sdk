<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_product_available_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeProductAvailableGetV10ApiService
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
     * 获取达人角色的商品列表
     */
    public function get(): ApiOpenApiV10QianchuanAwemeProductAvailableGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeProductAvailableGetGetRequest($this);
    }
}
