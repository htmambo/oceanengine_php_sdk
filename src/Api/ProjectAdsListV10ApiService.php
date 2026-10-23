<?php

/**
 * 本文件由 go2php 生成，源: api_project_ads_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectAdsListV10ApiService
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
     * ListProjectAds：传入 advertiser_id 和 cdp_project_id，只读查询项目下全部有效的底层 ad_id。排除已删除项目/计划、已删除自动广告和预览广告，不按广告启停状态过滤。所有 CDP 批次成功后返回去重、升序的 ad_ids；空项目成功返回 []，查询失败不返回部分列表。extra 返回 query_complete、ad_count、promotion_count 和查询口径。不调用 Debug 漏斗、创编、纠偏或关停。
     */
    public function get(): ApiOpenApiV10ProjectAdsListGetRequest
    {
        return new ApiOpenApiV10ProjectAdsListGetRequest($this);
    }
}
