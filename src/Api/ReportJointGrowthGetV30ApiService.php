<?php

/**
 * 本文件由 go2php 生成，源: api_report_joint_growth_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportJointGrowthGetV30ApiService
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
     * 联合出价广告加价商家消耗数据（无协议圈定）
     */
    public function get(): ApiOpenApiV30ReportJointGrowthGetGetRequest
    {
        return new ApiOpenApiV30ReportJointGrowthGetGetRequest($this);
    }
}
