<?php

/**
 * 本文件由 go2php 生成，源: api_carousel_ad_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CarouselAdGetV2ApiService
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
     * 获取同主体下广告主图集素材
     */
    public function get(): ApiOpenApi2CarouselAdGetGetRequest
    {
        return new ApiOpenApi2CarouselAdGetGetRequest($this);
    }
}
