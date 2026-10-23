<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_contact_log_record_url_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueContactLogRecordUrlGetV2ApiService
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
     * API Description
     */
    public function get(): ApiOpenApi2ToolsClueContactLogRecordUrlGetGetRequest
    {
        return new ApiOpenApi2ToolsClueContactLogRecordUrlGetGetRequest($this);
    }
}
