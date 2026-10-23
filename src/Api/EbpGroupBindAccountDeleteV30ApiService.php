<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_group_bind_account_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpGroupBindAccountDeleteV30ApiService
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
     * 解绑组织绑定的账户
     */
    public function post(): ApiOpenApiV30EbpGroupBindAccountDeletePostRequest
    {
        return new ApiOpenApiV30EbpGroupBindAccountDeletePostRequest($this);
    }
}
