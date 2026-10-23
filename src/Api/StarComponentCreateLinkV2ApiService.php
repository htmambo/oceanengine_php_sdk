<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_create_link_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarComponentCreateLinkV2ApiService
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
     * 常规组件创建
     */
    public function post(): ApiOpenApi2StarComponentCreateLinkPostRequest
    {
        return new ApiOpenApi2StarComponentCreateLinkPostRequest($this);
    }
}
