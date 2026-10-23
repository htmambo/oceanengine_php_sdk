<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_rit_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UbaToolRitUpdateV10ApiService
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
     * 投放点位屏蔽or放开功能，生效有延迟
     */
    public function post(): ApiOpenApiV10UbaToolRitUpdatePostRequest
    {
        return new ApiOpenApiV10UbaToolRitUpdatePostRequest($this);
    }
}
