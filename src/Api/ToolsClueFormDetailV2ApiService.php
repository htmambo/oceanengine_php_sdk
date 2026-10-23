<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_form_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueFormDetailV2ApiService
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
     * 查询表单详情
     */
    public function get(): ApiOpenApi2ToolsClueFormDetailGetRequest
    {
        return new ApiOpenApi2ToolsClueFormDetailGetRequest($this);
    }
}
