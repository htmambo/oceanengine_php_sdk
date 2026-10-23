<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_adv_bind_group_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpAdvBindGroupGetV30ApiService
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
     * 查找账户绑定工作台组织
     */
    public function get(): ApiOpenApiV30EbpAdvBindGroupGetGetRequest
    {
        return new ApiOpenApiV30EbpAdvBindGroupGetGetRequest($this);
    }
}
