<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_playable_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpPlayableUploadV30ApiService
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
     * EBP组织-上传试玩/直玩素材
     */
    public function post(): ApiOpenApiV30ToolsEbpPlayableUploadPostRequest
    {
        return new ApiOpenApiV30ToolsEbpPlayableUploadPostRequest($this);
    }
}
