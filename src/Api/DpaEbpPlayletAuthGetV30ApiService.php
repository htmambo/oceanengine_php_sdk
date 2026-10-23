<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_playlet_auth_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpPlayletAuthGetV30ApiService
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
     * EBP查询短剧商品原片授权申请状态
     */
    public function get(): ApiOpenApiV30DpaEbpPlayletAuthGetGetRequest
    {
        return new ApiOpenApiV30DpaEbpPlayletAuthGetGetRequest($this);
    }
}
