<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_smart_phone_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueSmartPhoneGetV2ApiService
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
     * 查询已有智能电话
     */
    public function get(): ApiOpenApi2ToolsClueSmartPhoneGetGetRequest
    {
        return new ApiOpenApi2ToolsClueSmartPhoneGetGetRequest($this);
    }
}
