<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_optional_targets_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DouplusOptionalTargetsListV30ApiService
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
     * 查询视频可投转化目标
     */
    public function get(): ApiOpenApiV30DouplusOptionalTargetsListGetRequest
    {
        return new ApiOpenApiV30DouplusOptionalTargetsListGetRequest($this);
    }
}
