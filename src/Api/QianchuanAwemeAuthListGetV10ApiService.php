<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_auth_list_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeAuthListGetV10ApiService
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
     * 获取千川账户下已授权抖音号
     */
    public function get(): ApiOpenApiV10QianchuanAwemeAuthListGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeAuthListGetGetRequest($this);
    }
}
