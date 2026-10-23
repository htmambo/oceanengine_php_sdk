<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_agent_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoAgentGetV2ApiService
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
     * 代理商获取视频素材
     */
    public function get(): ApiOpenApi2FileVideoAgentGetGetRequest
    {
        return new ApiOpenApi2FileVideoAgentGetGetRequest($this);
    }
}
