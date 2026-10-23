<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_industry_info_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementIndustryInfoListV2ApiService
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
     * 获取应用细分分类及题材标签「支持所有账户体系】 可通过请求参数account_id 账户id（指可以接的账号体系如广告主id、bpid等）和account_type 账户类型，查询所有应用细分分类及题材标签情况。
     */
    public function get(): ApiOpenApi2ToolsAppManagementIndustryInfoListGetRequest
    {
        return new ApiOpenApi2ToolsAppManagementIndustryInfoListGetRequest($this);
    }
}
