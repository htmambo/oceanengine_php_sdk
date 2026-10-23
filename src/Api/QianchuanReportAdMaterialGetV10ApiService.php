<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_ad_material_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportAdMaterialGetV10ApiService
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
     * 获取计划下素材的指标信息
     */
    public function get(): ApiOpenApiV10QianchuanReportAdMaterialGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportAdMaterialGetGetRequest($this);
    }
}
