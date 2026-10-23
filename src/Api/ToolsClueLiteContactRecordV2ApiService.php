<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_lite_contact_record_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueLiteContactRecordV2ApiService
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
     * 轻量化api，获取录音文件接口
     */
    public function post(): ApiOpenApi2ToolsClueLiteContactRecordPostRequest
    {
        return new ApiOpenApi2ToolsClueLiteContactRecordPostRequest($this);
    }
}
