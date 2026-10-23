<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_recruit_info_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderGetRecruitInfoGetV2ApiService
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
     * 招募服务商获取指定任务详情
     */
    public function get(): ApiOpenApi2StarMcnProviderGetRecruitInfoGetGetRequest
    {
        return new ApiOpenApi2StarMcnProviderGetRecruitInfoGetGetRequest($this);
    }
}
