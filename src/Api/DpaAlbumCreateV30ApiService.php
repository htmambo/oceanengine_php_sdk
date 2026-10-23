<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_album_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaAlbumCreateV30ApiService
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
     * 上传短剧信息，创建短剧
     */
    public function post(): ApiOpenApiV30DpaAlbumCreatePostRequest
    {
        return new ApiOpenApiV30DpaAlbumCreatePostRequest($this);
    }
}
