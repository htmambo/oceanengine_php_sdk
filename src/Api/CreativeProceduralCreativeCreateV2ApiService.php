<?php

/**
 * 本文件由 go2php 生成，源: api_creative_procedural_creative_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CreativeProceduralCreativeCreateV2ApiService
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
    public function post(): ApiOpenApi2CreativeProceduralCreativeCreatePostRequest
    {
        return new ApiOpenApi2CreativeProceduralCreativeCreatePostRequest($this);
    }
}
