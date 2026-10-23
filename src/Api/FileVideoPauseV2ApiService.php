<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_pause_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoPauseV2ApiService
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
     * 暂停账户下的素材
     */
    public function post(): ApiOpenApi2FileVideoPausePostRequest
    {
        return new ApiOpenApi2FileVideoPausePostRequest($this);
    }
}
