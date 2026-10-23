<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_suggest_roi_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanOverallSuggestRoiGetV10ApiService
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
     * 乘方-商品+直播 建议出价
     */
    public function get(): ApiOpenApiV10QianchuanOverallSuggestRoiGetGetRequest
    {
        return new ApiOpenApiV10QianchuanOverallSuggestRoiGetGetRequest($this);
    }
}
