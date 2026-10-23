<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_shop_auth_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanToolsShopAuthV10ApiService
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
     * 支持广告通过MAPI进行店铺授权
     */
    public function post(): ApiOpenApiV10QianchuanToolsShopAuthPostRequest
    {
        return new ApiOpenApiV10QianchuanToolsShopAuthPostRequest($this);
    }
}
