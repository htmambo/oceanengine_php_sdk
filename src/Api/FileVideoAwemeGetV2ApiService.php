<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_aweme_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoAwemeGetV2ApiService
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
     * API Description
     */
    public function get(): ApiOpenApi2FileVideoAwemeGetGetRequest
    {
        return new ApiOpenApi2FileVideoAwemeGetGetRequest($this);
    }
}
