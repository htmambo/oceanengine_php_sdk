<?php

/**
 * 本文件由 go2php 生成，源: api_native_anchor_get_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class NativeAnchorGetDetailV30ApiService
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
     * 根据锚点唯一id，获取到锚点详情
     */
    public function get(): ApiOpenApiV30NativeAnchorGetDetailGetRequest
    {
        return new ApiOpenApiV30NativeAnchorGetDetailGetRequest($this);
    }
}
