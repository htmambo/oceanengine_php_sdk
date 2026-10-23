<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_raise_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPromotionRaiseStatusGetV30ApiService
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
     * 获取一键起量方案列表
     */
    public function get(): ApiOpenApiV30ToolsPromotionRaiseStatusGetGetRequest
    {
        return new ApiOpenApiV30ToolsPromotionRaiseStatusGetGetRequest($this);
    }
}
