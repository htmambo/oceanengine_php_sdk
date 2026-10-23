<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_detail_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdDetailGetV10ApiService
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
     * 获取广告计划详情（包含创意）
     */
    public function get(): ApiOpenApiV10QianchuanAdDetailGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAdDetailGetGetRequest($this);
    }
}
