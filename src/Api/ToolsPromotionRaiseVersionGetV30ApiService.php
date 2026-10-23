<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_raise_version_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPromotionRaiseVersionGetV30ApiService
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
     * 获取起量版本信息
     */
    public function get(): ApiOpenApiV30ToolsPromotionRaiseVersionGetGetRequest
    {
        return new ApiOpenApiV30ToolsPromotionRaiseVersionGetGetRequest($this);
    }
}
