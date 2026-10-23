<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdUpdateV10ApiService
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
     * 1
     */
    public function post(): ApiOpenApiV10QianchuanAdUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanAdUpdatePostRequest($this);
    }
}
