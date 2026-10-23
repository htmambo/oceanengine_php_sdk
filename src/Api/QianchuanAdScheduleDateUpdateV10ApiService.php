<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_schedule_date_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdScheduleDateUpdateV10ApiService
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
     * 批量更新计划投放日期
     */
    public function post(): ApiOpenApiV10QianchuanAdScheduleDateUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanAdScheduleDateUpdatePostRequest($this);
    }
}
