<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoUpdateV2ApiService
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
     * 通过此接口，用户可以批量更新素材视频的名称。
     */
    public function post(): ApiOpenApi2FileVideoUpdatePostRequest
    {
        return new ApiOpenApi2FileVideoUpdatePostRequest($this);
    }
}
