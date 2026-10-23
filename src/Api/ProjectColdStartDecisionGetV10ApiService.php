<?php

/**
 * 本文件由 go2php 生成，源: api_project_cold_start_decision_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectColdStartDecisionGetV10ApiService
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
     * 根据广告主 ID（advertiser_id）和项目 ID（cdp_project_id），判断项目是否通过冷启动。
     * 按项目粒度汇总查询窗口内的 adv_value（ADVV）；SUM(adv_value) 严格大于400时 passed=true，否则为 false。查询起点取项目创建分钟与北京时间7天前零点的较晚值，终点为当前完整分钟，不增加延迟。
     * 接口仅返回查询与判断结果，不执行投放变更。仅在 success=true 时 passed 有效。extra 返回累计 ADVV、查询时间范围、阈值、判断原因和 history_truncated 标记；历史被截断时，passed=false 仅表示查询窗口内未超过阈值，不能据此判断窗口外的历史。
     */
    public function get(): ApiOpenApiV10ProjectColdStartDecisionGetGetRequest
    {
        return new ApiOpenApiV10ProjectColdStartDecisionGetGetRequest($this);
    }
}
