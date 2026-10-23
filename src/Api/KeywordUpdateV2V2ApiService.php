<?php

/**
 * 本文件由 go2php 生成，源: api_keyword_update_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class KeywordUpdateV2V2ApiService
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
    public function post(): ApiOpenApi2KeywordUpdateV2PostRequest
    {
        return new ApiOpenApi2KeywordUpdateV2PostRequest($this);
    }
}
