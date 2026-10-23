<?php

/**
 * 本文件由 go2php 生成，源: api_carousel_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CarouselListV2ApiService
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
     * 检索图集
     */
    public function get(): ApiOpenApi2CarouselListGetRequest
    {
        return new ApiOpenApi2CarouselListGetRequest($this);
    }
}
