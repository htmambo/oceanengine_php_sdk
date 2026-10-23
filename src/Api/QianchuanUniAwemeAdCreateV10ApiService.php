<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_aweme_ad_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniAwemeAdCreateV10ApiService
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
     * 新建全域推广计划
     */
    public function post(): ApiOpenApiV10QianchuanUniAwemeAdCreatePostRequest
    {
        return new ApiOpenApiV10QianchuanUniAwemeAdCreatePostRequest($this);
    }
}
