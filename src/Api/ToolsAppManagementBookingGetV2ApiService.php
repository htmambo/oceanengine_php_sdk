<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_booking_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementBookingGetV2ApiService
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
     * 查询游戏预约列表接口
     */
    public function get(): ApiOpenApi2ToolsAppManagementBookingGetGetRequest
    {
        return new ApiOpenApi2ToolsAppManagementBookingGetGetRequest($this);
    }
}
