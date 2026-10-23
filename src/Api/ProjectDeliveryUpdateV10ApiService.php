<?php

/**
 * 本文件由 go2php 生成，源: api_project_delivery_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectDeliveryUpdateV10ApiService
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
     * DiagnoseDeliveryIssue：传入 advertiser_id 和 cdp_project_id。通过 CDP 查询有效广告关联；无广告时准备 ProjectCreateAds(NO_AD)，有广告时比较最近两个完整小时精排阶段 7/9 通过率，下降则 PvrCorrection 每次 +0.02、最高 1.10，否则返回需要用户补充新素材。dry_run 省略或 true 时仅查询与预览，显式 false 才允许执行现有创编或纠偏。响应只包含 success、res_msg、extra；操作详情和是否需要用户操作都在 extra，project_create_ads、pvr_correction、material_refresh 的值是 JSON 字符串。CDP 有效关联未校验开关状态，extra.ad_switch_state_checked=false。
     */
    public function post(): ApiOpenApiV10ProjectDeliveryUpdatePostRequest
    {
        return new ApiOpenApiV10ProjectDeliveryUpdatePostRequest($this);
    }
}
