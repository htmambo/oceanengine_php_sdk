<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_sub_group_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpSubGroupCreateV30ApiService
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
     * 创建EBP得子组织
     */
    public function post(): ApiOpenApiV30EbpSubGroupCreatePostRequest
    {
        return new ApiOpenApiV30EbpSubGroupCreatePostRequest($this);
    }
}
