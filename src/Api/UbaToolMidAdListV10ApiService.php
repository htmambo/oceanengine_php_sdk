<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_mid_ad_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UbaToolMidAdListV10ApiService
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
     * 项目下素材计划查询
     */
    public function get(): ApiOpenApiV10UbaToolMidAdListGetRequest
    {
        return new ApiOpenApiV10UbaToolMidAdListGetRequest($this);
    }
}
