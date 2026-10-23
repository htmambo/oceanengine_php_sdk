<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_keyword_check_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanKeywordCheckV10ApiService
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
     * 关键词合规校验
     */
    public function post(): ApiOpenApiV10QianchuanKeywordCheckPostRequest
    {
        return new ApiOpenApiV10QianchuanKeywordCheckPostRequest($this);
    }
}
