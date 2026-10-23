<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_shop_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanShopGetV10ApiService
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
     * 获取店铺的基本信息
     */
    public function get(): ApiOpenApiV10QianchuanShopGetGetRequest
    {
        return new ApiOpenApiV10QianchuanShopGetGetRequest($this);
    }
}
