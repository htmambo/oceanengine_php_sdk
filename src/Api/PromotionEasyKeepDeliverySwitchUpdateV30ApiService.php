<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_easy_keep_delivery_switch_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionEasyKeepDeliverySwitchUpdateV30ApiService
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
     * 更新项目为续投或者停止续投
     */
    public function post(): ApiOpenApiV30PromotionEasyKeepDeliverySwitchUpdatePostRequest
    {
        return new ApiOpenApiV30PromotionEasyKeepDeliverySwitchUpdatePostRequest($this);
    }
}
