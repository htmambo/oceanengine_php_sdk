<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_aweme_aweme_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanOverallAwemeAwemeDeleteV10ApiService
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
     * 删除乘方计划下的抖音号
     */
    public function post(): ApiOpenApiV10QianchuanOverallAwemeAwemeDeletePostRequest
    {
        return new ApiOpenApiV10QianchuanOverallAwemeAwemeDeletePostRequest($this);
    }
}
