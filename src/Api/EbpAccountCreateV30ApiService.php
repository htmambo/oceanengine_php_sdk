<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_account_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpAccountCreateV30ApiService
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
     * 工作台组织下创建账户
     */
    public function post(): ApiOpenApiV30EbpAccountCreatePostRequest
    {
        return new ApiOpenApiV30EbpAccountCreatePostRequest($this);
    }
}
