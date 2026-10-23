<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_interest_action_interest_keyword_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeInterestActionInterestKeywordV10ApiService
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
     * 获取随心推兴趣标签
     */
    public function get(): ApiOpenApiV10QianchuanAwemeInterestActionInterestKeywordGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeInterestActionInterestKeywordGetRequest($this);
    }
}
