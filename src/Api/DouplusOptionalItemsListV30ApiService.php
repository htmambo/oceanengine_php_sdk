<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_optional_items_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DouplusOptionalItemsListV30ApiService
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
     * 获取DOU+可投视频列表
     */
    public function get(): ApiOpenApiV30DouplusOptionalItemsListGetRequest
    {
        return new ApiOpenApiV30DouplusOptionalItemsListGetRequest($this);
    }
}
