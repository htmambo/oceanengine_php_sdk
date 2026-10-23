<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_query_link_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarComponentQueryLinkV2ApiService
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
     * 常规组件查询
     */
    public function get(): ApiOpenApi2StarComponentQueryLinkGetRequest
    {
        return new ApiOpenApi2StarComponentQueryLinkGetRequest($this);
    }
}
