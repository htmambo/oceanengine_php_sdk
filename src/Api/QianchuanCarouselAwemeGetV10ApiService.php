<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_carousel_aweme_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanCarouselAwemeGetV10ApiService
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
     * 通过商品id获取抖音号下已有的图文素材，当前仅短视频带货支持，必须传商品id
     */
    public function get(): ApiOpenApiV10QianchuanCarouselAwemeGetGetRequest
    {
        return new ApiOpenApiV10QianchuanCarouselAwemeGetGetRequest($this);
    }
}
