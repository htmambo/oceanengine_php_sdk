<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_tag_on_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderGetTagOnTaskV2ApiService
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
     * 星广服务商-视频标签查询
     */
    public function get(): ApiOpenApi2StarMcnProviderGetTagOnTaskGetRequest
    {
        return new ApiOpenApi2StarMcnProviderGetTagOnTaskGetRequest($this);
    }
}
