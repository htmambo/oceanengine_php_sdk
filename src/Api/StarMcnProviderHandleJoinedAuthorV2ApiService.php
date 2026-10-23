<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_handle_joined_author_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderHandleJoinedAuthorV2ApiService
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
     * 星广服务商审核达人
     */
    public function post(): ApiOpenApi2StarMcnProviderHandleJoinedAuthorPostRequest
    {
        return new ApiOpenApi2StarMcnProviderHandleJoinedAuthorPostRequest($this);
    }
}
