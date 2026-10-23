<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_form_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueFormGetV2ApiService
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
     * 查询已有表单列表
     */
    public function get(): ApiOpenApi2ToolsClueFormGetGetRequest
    {
        return new ApiOpenApi2ToolsClueFormGetGetRequest($this);
    }
}
