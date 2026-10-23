<?php

/**
 * 本文件由 go2php 生成，源: api_file_incentive_policy_base_info_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileIncentivePolicyBaseInfoGetV2ApiService
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
     * 明点激励政策基础信息查询
     */
    public function get(): ApiOpenApi2FileIncentivePolicyBaseInfoGetGetRequest
    {
        return new ApiOpenApi2FileIncentivePolicyBaseInfoGetGetRequest($this);
    }
}
