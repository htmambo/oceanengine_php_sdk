<?php

/**
 * 本文件由 go2php 生成，源: api_file_carousel_aweme_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileCarouselAwemeGetV30ApiService
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
     * 获取创编可用的抖音图文素材
     */
    public function get(): ApiOpenApiV30FileCarouselAwemeGetGetRequest
    {
        return new ApiOpenApiV30FileCarouselAwemeGetGetRequest($this);
    }
}
