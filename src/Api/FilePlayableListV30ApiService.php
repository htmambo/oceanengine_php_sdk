<?php

/**
 * 本文件由 go2php 生成，源: api_file_playable_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FilePlayableListV30ApiService
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
     * 直玩、试玩列表
     */
    public function get(): ApiOpenApiV30FilePlayableListGetRequest
    {
        return new ApiOpenApiV30FilePlayableListGetRequest($this);
    }
}
