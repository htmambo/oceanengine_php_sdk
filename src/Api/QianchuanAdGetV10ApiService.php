<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdGetV10ApiService
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
     * 用于获取千川广告账户下创建的计划列表（不含创意部分） 默认可以拉取全部计划详情，可以通过过滤拉取部分计划
     */
    public function get(): ApiOpenApiV10QianchuanAdGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAdGetGetRequest($this);
    }
}
