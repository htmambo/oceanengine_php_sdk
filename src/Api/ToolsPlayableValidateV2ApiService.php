<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_validate_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPlayableValidateV2ApiService
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
     * 试玩素材上传校验结果。
     */
    public function get(): ApiOpenApi2ToolsPlayableValidateGetRequest
    {
        return new ApiOpenApi2ToolsPlayableValidateGetRequest($this);
    }
}
