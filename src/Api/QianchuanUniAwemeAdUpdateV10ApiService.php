<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_aweme_ad_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniAwemeAdUpdateV10ApiService
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
     * 编辑全域推广计划
     */
    public function post(): ApiOpenApiV10QianchuanUniAwemeAdUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanUniAwemeAdUpdatePostRequest($this);
    }
}
