<?php

/**
 * 本文件由 go2php 生成，源: api_creative_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CreativeGetV2ApiService
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
     * 获取创意列表
     */
    public function get(): ApiOpenApi2CreativeGetGetRequest
    {
        return new ApiOpenApi2CreativeGetGetRequest($this);
    }
}
