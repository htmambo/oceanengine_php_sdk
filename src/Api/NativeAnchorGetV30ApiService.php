<?php

/**
 * 本文件由 go2php 生成，源: api_native_anchor_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class NativeAnchorGetV30ApiService
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
     * 获取账户下的原生锚点列表
     */
    public function get(): ApiOpenApiV30NativeAnchorGetGetRequest
    {
        return new ApiOpenApiV30NativeAnchorGetGetRequest($this);
    }
}
