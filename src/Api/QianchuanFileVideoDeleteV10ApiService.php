<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_file_video_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanFileVideoDeleteV10ApiService
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
     * 批量删除视频素材
     */
    public function post(): ApiOpenApiV10QianchuanFileVideoDeletePostRequest
    {
        return new ApiOpenApiV10QianchuanFileVideoDeletePostRequest($this);
    }
}
