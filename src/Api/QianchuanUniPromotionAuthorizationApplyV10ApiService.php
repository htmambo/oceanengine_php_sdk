<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_authorization_apply_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAuthorizationApplyV10ApiService
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
     * 广告主申请全域推广授权
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAuthorizationApplyPostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAuthorizationApplyPostRequest($this);
    }
}
