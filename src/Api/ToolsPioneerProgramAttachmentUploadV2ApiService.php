<?php

/**
 * 本文件由 go2php 生成，源: api_tools_pioneer_program_attachment_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPioneerProgramAttachmentUploadV2ApiService
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
     * 上传先锋计划数据
     */
    public function post(): ApiOpenApi2ToolsPioneerProgramAttachmentUploadPostRequest
    {
        return new ApiOpenApi2ToolsPioneerProgramAttachmentUploadPostRequest($this);
    }
}
