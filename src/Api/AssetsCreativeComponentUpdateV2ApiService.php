<?php

/**
 * 本文件由 go2php 生成，源: api_assets_creative_component_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AssetsCreativeComponentUpdateV2ApiService
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
    public function post(): ApiOpenApi2AssetsCreativeComponentUpdatePostRequest
    {
        return new ApiOpenApi2AssetsCreativeComponentUpdatePostRequest($this);
    }
}
