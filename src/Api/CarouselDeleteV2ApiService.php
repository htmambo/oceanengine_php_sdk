<?php

/**
 * 本文件由 go2php 生成，源: api_carousel_delete_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CarouselDeleteV2ApiService
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
     * 批量删除图集
     */
    public function post(): ApiOpenApi2CarouselDeletePostRequest
    {
        return new ApiOpenApi2CarouselDeletePostRequest($this);
    }
}
