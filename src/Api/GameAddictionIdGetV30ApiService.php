<?php

/**
 * 本文件由 go2php 生成，源: api_game_addiction_id_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class GameAddictionIdGetV30ApiService
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
     * 查询应用关键行为
     */
    public function get(): ApiOpenApiV30GameAddictionIdGetGetRequest
    {
        return new ApiOpenApiV30GameAddictionIdGetGetRequest($this);
    }
}
