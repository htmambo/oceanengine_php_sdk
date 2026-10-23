<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_video_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanOverallVideoCreateV10ApiService
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
     * 乘方计划创编接口
     */
    public function post(): ApiOpenApiV10QianchuanOverallVideoCreatePostRequest
    {
        return new ApiOpenApiV10QianchuanOverallVideoCreatePostRequest($this);
    }
}
