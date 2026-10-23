<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_contact_log_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueContactLogListV2ApiService
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
     * 根据线索外呼接口获得的呼叫记录id，获取对应呼叫记录的话单。线索外呼和用户回呼都会记录到对应的话单，且话单包含AXB三个号码
     */
    public function get(): ApiOpenApi2ToolsClueContactLogListGetRequest
    {
        return new ApiOpenApi2ToolsClueContactLogListGetRequest($this);
    }
}
