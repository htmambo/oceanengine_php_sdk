<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_booking_records_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementBookingRecordsGetV2ApiService
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
     * 查询应用预约记录接口
     */
    public function get(): ApiOpenApi2ToolsAppManagementBookingRecordsGetGetRequest
    {
        return new ApiOpenApi2ToolsAppManagementBookingRecordsGetGetRequest($this);
    }
}
