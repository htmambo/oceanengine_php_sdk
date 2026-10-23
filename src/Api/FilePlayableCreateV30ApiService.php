<?php

/**
 * 本文件由 go2php 生成，源: api_file_playable_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FilePlayableCreateV30ApiService
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
     * 创建试玩、直玩素材
     */
    public function post(): ApiOpenApiV30FilePlayableCreatePostRequest
    {
        return new ApiOpenApiV30FilePlayableCreatePostRequest($this);
    }
}
