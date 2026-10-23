<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_create_common_component_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarComponentCreateCommonComponentV2ApiService
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
     * 作为星图通用组件创建api提供出去
     */
    public function post(): ApiOpenApi2StarComponentCreateCommonComponentPostRequest
    {
        return new ApiOpenApi2StarComponentCreateCommonComponentPostRequest($this);
    }
}
