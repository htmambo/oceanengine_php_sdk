<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_lq_ad_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanLqAdGetV10ApiService
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
     * 用于获取千川广告账户下的低质计划信息
     */
    public function get(): ApiOpenApiV10QianchuanLqAdGetGetRequest
    {
        return new ApiOpenApiV10QianchuanLqAdGetGetRequest($this);
    }
}
