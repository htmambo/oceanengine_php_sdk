<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_update_common_component_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarComponentUpdateCommonComponentV2ApiService
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
     * 提供通用的星图组件修改api
     */
    public function post(): ApiOpenApi2StarComponentUpdateCommonComponentPostRequest
    {
        return new ApiOpenApi2StarComponentUpdateCommonComponentPostRequest($this);
    }
}
