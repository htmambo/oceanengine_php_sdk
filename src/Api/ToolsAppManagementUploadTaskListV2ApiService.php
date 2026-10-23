<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_upload_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementUploadTaskListV2ApiService
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
     * 查询异步上传解析任务的状态信息「支持所有账户体系」
     */
    public function get(): ApiOpenApi2ToolsAppManagementUploadTaskListGetRequest
    {
        return new ApiOpenApi2ToolsAppManagementUploadTaskListGetRequest($this);
    }
}
