<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_allow_coupon_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanToolsAllowCouponV10ApiService
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
     * https://bytedance.feishu.cn/wiki/F5LcwvkR5iC17MkfmWCc82BenCd
     */
    public function get(): ApiOpenApiV10QianchuanToolsAllowCouponGetRequest
    {
        return new ApiOpenApiV10QianchuanToolsAllowCouponGetRequest($this);
    }
}
