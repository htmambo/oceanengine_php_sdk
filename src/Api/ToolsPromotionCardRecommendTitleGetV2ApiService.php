<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_card_recommend_title_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPromotionCardRecommendTitleGetV2ApiService
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
     * 用于获取推广卡片推荐文案列表
     */
    public function get(): ApiOpenApi2ToolsPromotionCardRecommendTitleGetGetRequest
    {
        return new ApiOpenApi2ToolsPromotionCardRecommendTitleGetGetRequest($this);
    }
}
