<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_aweme_authorized_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniAwemeAuthorizedGetV10ApiService
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
     * 获取可投全域推广抖音号列表
     */
    public function get(): ApiOpenApiV10QianchuanUniAwemeAuthorizedGetGetRequest
    {
        return new ApiOpenApiV10QianchuanUniAwemeAuthorizedGetGetRequest($this);
    }
}
