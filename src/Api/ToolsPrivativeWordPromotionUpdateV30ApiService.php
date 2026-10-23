<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_promotion_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPrivativeWordPromotionUpdateV30ApiService
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
     * 批量更新广告否定词
     */
    public function post(): ApiOpenApiV30ToolsPrivativeWordPromotionUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsPrivativeWordPromotionUpdatePostRequest($this);
    }
}
