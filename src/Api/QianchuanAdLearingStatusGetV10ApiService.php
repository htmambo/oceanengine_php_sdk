<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_learing_status_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdLearingStatusGetV10ApiService
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
     * 获取计划学习期状态，PRD：https://bytedance.feishu.cn/wiki/wikcnYND8yM4rlghMS4NXDGMq4i
     */
    public function get(): ApiOpenApiV10QianchuanAdLearingStatusGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAdLearingStatusGetGetRequest($this);
    }
}
