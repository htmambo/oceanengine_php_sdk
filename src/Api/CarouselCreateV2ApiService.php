<?php

/**
 * 本文件由 go2php 生成，源: api_carousel_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CarouselCreateV2ApiService
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
     * 塑造图集，出参图集mid。不同图片顺序对应不同的图集mid。
     */
    public function post(): ApiOpenApi2CarouselCreatePostRequest
    {
        return new ApiOpenApi2CarouselCreatePostRequest($this);
    }
}
