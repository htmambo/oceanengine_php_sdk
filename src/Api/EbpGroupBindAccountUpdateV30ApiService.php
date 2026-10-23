<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_group_bind_account_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpGroupBindAccountUpdateV30ApiService
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
     * 工作台组织内账户转移
     */
    public function post(): ApiOpenApiV30EbpGroupBindAccountUpdatePostRequest
    {
        return new ApiOpenApiV30EbpGroupBindAccountUpdatePostRequest($this);
    }
}
