<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rta_get_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsRtaGetInfoV2ApiService
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
     * 获取账户/组RTA策略设置
     */
    public function get(): ApiOpenApi2ToolsRtaGetInfoGetRequest
    {
        return new ApiOpenApi2ToolsRtaGetInfoGetRequest($this);
    }
}
