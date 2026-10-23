<?php

/**
 * 本文件由 go2php 生成，源: api_star_attachment_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarAttachmentUploadV2ApiService
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
     * 任务材料上传
     */
    public function post(): ApiOpenApi2StarAttachmentUploadPostRequest
    {
        return new ApiOpenApi2StarAttachmentUploadPostRequest($this);
    }
}
