<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_schedule_fixed_range_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdScheduleFixedRangeUpdateV10ApiService
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
     * 批量更新计划固定时长
     */
    public function post(): ApiOpenApiV10QianchuanAdScheduleFixedRangeUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanAdScheduleFixedRangeUpdatePostRequest($this);
    }
}
