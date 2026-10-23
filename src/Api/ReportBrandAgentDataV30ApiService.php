<?php

/**
 * 本文件由 go2php 生成，源: api_report_brand_agent_data_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportBrandAgentDataV30ApiService
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
     * 查询品牌代投数据的2.0接口，范围包含半自助和媒介创建的计划
     */
    public function get(): ApiOpenApiV30ReportBrandAgentDataGetRequest
    {
        return new ApiOpenApiV30ReportBrandAgentDataGetRequest($this);
    }
}
