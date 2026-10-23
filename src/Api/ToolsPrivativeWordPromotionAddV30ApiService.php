<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_promotion_add_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPrivativeWordPromotionAddV30ApiService
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
     * 批量新增广告否定词
     */
    public function post(): ApiOpenApiV30ToolsPrivativeWordPromotionAddPostRequest
    {
        return new ApiOpenApiV30ToolsPrivativeWordPromotionAddPostRequest($this);
    }
}
