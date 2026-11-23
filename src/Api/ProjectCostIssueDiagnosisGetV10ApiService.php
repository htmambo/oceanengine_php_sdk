<?php

/**
 * 本文件由 go2php 生成，源: api_project_cost_issue_diagnosis_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectCostIssueDiagnosisGetV10ApiService
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
     * DiagnoseCostIssue：按计费时间比较今日累计付费ROI与昨天同时段，返回低ROI消耗RIT、消耗TOP计划/素材中的零转化对象和证据。阈值、对比天数、保护RIT、TOP数量和持续时间显式传入；仅返回建议，不屏蔽RIT、不关停计划、不删除素材。
     */
    public function get(): ApiOpenApiV10ProjectCostIssueDiagnosisGetGetRequest
    {
        return new ApiOpenApiV10ProjectCostIssueDiagnosisGetGetRequest($this);
    }
}
