<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_newcustomer_type_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionNewcustomerTypeGetV30ApiService
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
     * 根据advid 判断该广告主是否在简单投能力开放范围内
     */
    public function get(): ApiOpenApiV30PromotionNewcustomerTypeGetGetRequest
    {
        return new ApiOpenApiV30PromotionNewcustomerTypeGetGetRequest($this);
    }
}
