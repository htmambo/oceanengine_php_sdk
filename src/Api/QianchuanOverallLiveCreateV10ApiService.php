<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_live_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanOverallLiveCreateV10ApiService
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
     * 创建直播乘方计划
     */
    public function post(): ApiOpenApiV10QianchuanOverallLiveCreatePostRequest
    {
        return new ApiOpenApiV10QianchuanOverallLiveCreatePostRequest($this);
    }
}
