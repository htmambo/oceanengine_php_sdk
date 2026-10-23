<?php

/**
 * 本文件由 go2php 生成，源: api_carousel_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CarouselUpdateV2ApiService
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
     * 更细图集信息，目前仅支持图集 file_name 和主题修改
     */
    public function post(): ApiOpenApi2CarouselUpdatePostRequest
    {
        return new ApiOpenApi2CarouselUpdatePostRequest($this);
    }
}
