<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_suggest_bid_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanSuggestBidV10ApiService
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
     * 获取非ROI目标建议出价
     */
    public function get(): ApiOpenApiV10QianchuanSuggestBidGetRequest
    {
        return new ApiOpenApiV10QianchuanSuggestBidGetRequest($this);
    }
}
