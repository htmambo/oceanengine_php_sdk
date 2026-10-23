<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_ad_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoAdGetV2ApiService
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
     * 通过此接口，用户可以查询同主体下的广告主视频信息。
     */
    public function get(): ApiOpenApi2FileVideoAdGetGetRequest
    {
        return new ApiOpenApi2FileVideoAdGetGetRequest($this);
    }
}
