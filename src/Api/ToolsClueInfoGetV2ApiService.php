<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_info_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueInfoGetV2ApiService
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
     * 根据线索id获取对应线索的信息，包括返款标签等
     */
    public function get(): ApiOpenApi2ToolsClueInfoGetGetRequest
    {
        return new ApiOpenApi2ToolsClueInfoGetGetRequest($this);
    }
}
