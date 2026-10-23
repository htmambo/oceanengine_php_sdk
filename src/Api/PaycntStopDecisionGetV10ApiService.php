<?php

/**
 * 本文件由 go2php 生成，源: api_paycnt_stop_decision_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PaycntStopDecisionGetV10ApiService
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
     * 根据广告主 ID（advertiser_id）和项目 ID（cdp_project_id），判断每次付费项目是否命中暂停条件。
     * 按项目粒度查询北京时间最近60个完整分钟的数据，不增加延迟。预估点击率 = SUM(ectr_sum) / SUM(send_cnt)，bagging_cvr_ori 按 AVG 聚合；当 0.005 ≤ 预估点击率 ≤ 0.02 且 0.0005 ≤ AVG(bagging_cvr_ori) ≤ 0.015 时，should_stop=true，否则为 false。
     * 接口仅返回判断结果，不执行项目或广告关停。仅在 success=true 时 should_stop 有效；无数据、send_cnt 为0或查询失败时不返回有效判断。extra 返回指标、查询时间范围及判断原因等附加信息。
     */
    public function get(): ApiOpenApiV10PaycntStopDecisionGetGetRequest
    {
        return new ApiOpenApiV10PaycntStopDecisionGetGetRequest($this);
    }
}
