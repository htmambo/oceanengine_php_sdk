<?php

/**
 * 本文件由 go2php 生成，源: api_tools_country_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsCountryInfoV2ApiService
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
     * 查询国家/区域信息
     */
    public function get(): ApiOpenApi2ToolsCountryInfoGetRequest
    {
        return new ApiOpenApi2ToolsCountryInfoGetRequest($this);
    }
}
