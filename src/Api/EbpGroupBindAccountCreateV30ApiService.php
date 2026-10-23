<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_group_bind_account_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpGroupBindAccountCreateV30ApiService
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
     * 工作台组织绑定账户，支持通过主体、客户ID方式绑定
     */
    public function post(): ApiOpenApiV30EbpGroupBindAccountCreatePostRequest
    {
        return new ApiOpenApiV30EbpGroupBindAccountCreatePostRequest($this);
    }
}
