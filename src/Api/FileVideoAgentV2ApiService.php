<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_agent_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoAgentV2ApiService
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
     * 代理商可以通过此接口，上传视频素材
     */
    public function post(): ApiOpenApi2FileVideoAgentPostRequest
    {
        return new ApiOpenApi2FileVideoAgentPostRequest($this);
    }
}
