<?php

/**
 * 本文件由 go2php 生成，源: api_local_file_video_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalFileVideoGetV30ApiService
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
     * 获取素材库视频素材
     */
    public function get(): ApiOpenApiV30LocalFileVideoGetGetRequest
    {
        return new ApiOpenApiV30LocalFileVideoGetGetRequest($this);
    }
}
