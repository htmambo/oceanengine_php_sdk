<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_account_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalImAccountGetV30ApiService
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
     * 获取根户下的区域/门店生服账户信息和广告信息
     */
    public function get(): ApiOpenApiV30LocalImAccountGetGetRequest
    {
        return new ApiOpenApiV30LocalImAccountGetGetRequest($this);
    }
}
