<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_compensate_status_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdCompensateStatusGetV10ApiService
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
     * 获取计划成本保障状态，依赖pmc
     */
    public function get(): ApiOpenApiV10QianchuanAdCompensateStatusGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAdCompensateStatusGetGetRequest($this);
    }
}
