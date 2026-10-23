<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_get_author_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnGetAuthorListV2ApiService
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
     * 机构承包-获取达人绑定关系
     */
    public function get(): ApiOpenApi2StarMcnGetAuthorListGetRequest
    {
        return new ApiOpenApi2StarMcnGetAuthorListGetRequest($this);
    }
}
