<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_carousel_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanCarouselGetV10ApiService
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
     * 获取千川素材库图文
     */
    public function get(): ApiOpenApiV10QianchuanCarouselGetGetRequest
    {
        return new ApiOpenApiV10QianchuanCarouselGetGetRequest($this);
    }
}
