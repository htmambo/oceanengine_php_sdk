<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_quota_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdQuotaGetV10ApiService
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
    public function get(): ApiOpenApiV10QianchuanAdQuotaGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAdQuotaGetGetRequest($this);
    }
}
