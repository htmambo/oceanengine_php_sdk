<?php

/**
 * 本文件由 go2php 生成，源: api_local_report_account_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalReportAccountGetV30ApiService
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
     * 查询账户维度数据
     */
    public function get(): ApiOpenApiV30LocalReportAccountGetGetRequest
    {
        return new ApiOpenApiV30LocalReportAccountGetGetRequest($this);
    }
}
