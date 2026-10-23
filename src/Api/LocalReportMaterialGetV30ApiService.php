<?php

/**
 * 本文件由 go2php 生成，源: api_local_report_material_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalReportMaterialGetV30ApiService
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
     * 获取素材数据
     */
    public function get(): ApiOpenApiV30LocalReportMaterialGetGetRequest
    {
        return new ApiOpenApiV30LocalReportMaterialGetGetRequest($this);
    }
}
