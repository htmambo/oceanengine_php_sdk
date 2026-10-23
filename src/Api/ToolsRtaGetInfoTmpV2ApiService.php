<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rta_get_info_tmp_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsRtaGetInfoTmpV2ApiService
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
     * 获取账户/组RTA策略设置-内部使用
     */
    public function get(): ApiOpenApi2ToolsRtaGetInfoTmpGetRequest
    {
        return new ApiOpenApi2ToolsRtaGetInfoTmpGetRequest($this);
    }
}
