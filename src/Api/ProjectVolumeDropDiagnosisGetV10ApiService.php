<?php

/**
 * 本文件由 go2php 生成，源: api_project_volume_drop_diagnosis_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectVolumeDropDiagnosisGetV10ApiService
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
     * DiagnoseVolumeDrop：按今日累计消耗与昨天同时段对比，并查询项目消耗TOP计划及最近两个完整小时精排通过率；阈值、纠偏步长/上限、TOP数量和持续时间均由调用方传入。仅返回诊断证据和纠偏建议，不执行纠偏、创编、关停或删除。外部调用方决定调用时机。
     */
    public function get(): ApiOpenApiV10ProjectVolumeDropDiagnosisGetGetRequest
    {
        return new ApiOpenApiV10ProjectVolumeDropDiagnosisGetGetRequest($this);
    }
}
