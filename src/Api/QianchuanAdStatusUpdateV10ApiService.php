<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_status_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdStatusUpdateV10ApiService
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
     * API Description
     */
    public function post(): ApiOpenApiV10QianchuanAdStatusUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanAdStatusUpdatePostRequest($this);
    }
}
