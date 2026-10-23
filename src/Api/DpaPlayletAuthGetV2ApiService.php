<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_playlet_auth_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaPlayletAuthGetV2ApiService
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
     * 查询短剧商品原片授权申请状态
     */
    public function get(): ApiOpenApi2DpaPlayletAuthGetGetRequest
    {
        return new ApiOpenApi2DpaPlayletAuthGetGetRequest($this);
    }
}
