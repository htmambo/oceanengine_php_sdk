<?php

/**
 * 本文件由 go2php 生成，源: api_report_joint_growth_cus_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportJointGrowthCusGetV30ApiService
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
     * 联合出价广告加价商家消耗数据（有主体范围协议）
     */
    public function get(): ApiOpenApiV30ReportJointGrowthCusGetGetRequest
    {
        return new ApiOpenApiV30ReportJointGrowthCusGetGetRequest($this);
    }
}
