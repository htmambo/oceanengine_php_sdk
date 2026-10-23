<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_album_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaAlbumStatusGetV30ApiService
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
     * 通过短剧alblumID查询短剧可投状态
     */
    public function get(): ApiOpenApiV30DpaAlbumStatusGetGetRequest
    {
        return new ApiOpenApiV30DpaAlbumStatusGetGetRequest($this);
    }
}
