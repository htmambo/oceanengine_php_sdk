<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_video_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanOverallVideoUpdateV10ApiService
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
     * 乘方商品投放计划编辑接口
     */
    public function post(): ApiOpenApiV10QianchuanOverallVideoUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanOverallVideoUpdatePostRequest($this);
    }
}
