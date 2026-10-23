<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_card_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalImCardGetV30ApiService
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
     * 查询线索私信消息卡片
     */
    public function get(): ApiOpenApiV30LocalImCardGetGetRequest
    {
        return new ApiOpenApiV30LocalImCardGetGetRequest($this);
    }
}
