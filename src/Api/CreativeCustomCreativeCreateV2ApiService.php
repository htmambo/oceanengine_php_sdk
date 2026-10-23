<?php

/**
 * 本文件由 go2php 生成，源: api_creative_custom_creative_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CreativeCustomCreativeCreateV2ApiService
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
    public function post(): ApiOpenApi2CreativeCustomCreativeCreatePostRequest
    {
        return new ApiOpenApi2CreativeCustomCreativeCreatePostRequest($this);
    }
}
