<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_auth_init_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAuthInitV10ApiService
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
     * 授权初始化接口
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAuthInitPostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAuthInitPostRequest($this);
    }
}
