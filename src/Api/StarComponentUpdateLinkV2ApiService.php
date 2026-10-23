<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_update_link_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarComponentUpdateLinkV2ApiService
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
     * 常规组件修改
     */
    public function post(): ApiOpenApi2StarComponentUpdateLinkPostRequest
    {
        return new ApiOpenApi2StarComponentUpdateLinkPostRequest($this);
    }
}
