<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdCreateV10ApiService
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
     * 计划创建接口
     */
    public function post(): ApiOpenApiV10QianchuanAdCreatePostRequest
    {
        return new ApiOpenApiV10QianchuanAdCreatePostRequest($this);
    }
}
