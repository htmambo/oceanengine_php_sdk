<?php

/**
 * 本文件由 go2php 生成，源: api_file_ebp_video_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileEbpVideoGetV30ApiService
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
     * 获取账户可用的组织视频列表
     */
    public function get(): ApiOpenApiV30FileEbpVideoGetGetRequest
    {
        return new ApiOpenApiV30FileEbpVideoGetGetRequest($this);
    }
}
