<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_recommend_keywords_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdRecommendKeywordsGetV10ApiService
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
     * API Description
     */
    public function get(): ApiOpenApiV10QianchuanAdRecommendKeywordsGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAdRecommendKeywordsGetGetRequest($this);
    }
}
