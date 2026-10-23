<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_custom_config_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportCustomConfigGetV10ApiService
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
     * 查询用户可以用于自定义报表的指标和维度
     */
    public function get(): ApiOpenApiV10QianchuanReportCustomConfigGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportCustomConfigGetGetRequest($this);
    }
}
