<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_suggest_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeUniPromotionSuggestV10ApiService
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
     * 获取随心推全域投放建议
     */
    public function get(): ApiOpenApiV10QianchuanAwemeUniPromotionSuggestGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeUniPromotionSuggestGetRequest($this);
    }
}
