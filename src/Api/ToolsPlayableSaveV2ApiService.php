<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_save_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPlayableSaveV2ApiService
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
     * 上传并校验审核通过后，调用本接口保存试玩素材。
     */
    public function post(): ApiOpenApi2ToolsPlayableSavePostRequest
    {
        return new ApiOpenApi2ToolsPlayableSavePostRequest($this);
    }
}
