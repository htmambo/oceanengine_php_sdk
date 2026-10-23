<?php

/**
 * 本文件由 go2php 生成，源: api_paycnt7r_stop_decision_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class Paycnt7rStopDecisionGetV10ApiService
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
     * 根据广告主 ID（advertiser_id）和项目 ID（cdp_project_id），判断每付+7R项目是否命中暂停条件。
     * 按项目粒度查询北京时间最近60个完整分钟的数据。预估点击率 = SUM(ectr_sum) / SUM(send_cnt)，bagging_cvr_ori 按 AVG 聚合；当 0.005 ≤ 预估点击率 ≤ 0.03 且 0.0005 ≤ AVG(bagging_cvr_ori) ≤ 0.01 时，should_stop=true，否则为 false。
     * 接口只返回判断结果，不执行项目或广告关停。仅在 success=true 时 should_stop 有效；无数据、send_cnt 为0或下游查询失败时返回失败信息，不给出有效暂停结论。extra 用于返回指标、查询时间范围及判断原因等附加信息。
     */
    public function get(): ApiOpenApiV10Paycnt7rStopDecisionGetGetRequest
    {
        return new ApiOpenApiV10Paycnt7rStopDecisionGetGetRequest($this);
    }
}
