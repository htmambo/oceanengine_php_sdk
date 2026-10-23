<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_region_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdRegionUpdateV10ApiService
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
     * 批量更新计划定向地域
     */
    public function post(): ApiOpenApiV10QianchuanAdRegionUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanAdRegionUpdatePostRequest($this);
    }
}
