<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_suggest_bid_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeSuggestBidV10ApiService
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
     * 小店获取短视频建议出价
     */
    public function get(): ApiOpenApiV10QianchuanAwemeSuggestBidGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeSuggestBidGetRequest($this);
    }
}
