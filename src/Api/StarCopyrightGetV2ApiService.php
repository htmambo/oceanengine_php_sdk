<?php

/**
 * 本文件由 go2php 生成，源: api_star_copyright_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarCopyrightGetV2ApiService
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
     * 客户查询已拥有的版权内容
     */
    public function get(): ApiOpenApi2StarCopyrightGetGetRequest
    {
        return new ApiOpenApi2StarCopyrightGetGetRequest($this);
    }
}
