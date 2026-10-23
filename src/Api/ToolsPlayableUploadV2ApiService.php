<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPlayableUploadV2ApiService
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
     * 试玩素材上传，首先调用playable/upload/进行素材包上传，然后调用playable/validate/进行素材上传结果校验，若审核通过，即可调用playable/save/完成素材上传。
     */
    public function post(): ApiOpenApi2ToolsPlayableUploadPostRequest
    {
        return new ApiOpenApi2ToolsPlayableUploadPostRequest($this);
    }
}
