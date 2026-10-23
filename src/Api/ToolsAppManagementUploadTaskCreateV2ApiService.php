<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_upload_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementUploadTaskCreateV2ApiService
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
     * 创建异步下载任务「支持所有账户体系】 可通过请求参数account_id 账户id和account_type 账户类型，执行异步下载&上传到TOS&apk解析。
     */
    public function post(): ApiOpenApi2ToolsAppManagementUploadTaskCreatePostRequest
    {
        return new ApiOpenApi2ToolsAppManagementUploadTaskCreatePostRequest($this);
    }
}
