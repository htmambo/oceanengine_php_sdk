<?php

/**
 * 本文件由 go2php 生成，源: api_gameplay_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class GameplayListV30ApiService
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
     * 支持通过账户id和资产id，获取资产的玩法列表，资产范围：安卓游戏、抖音小游戏、微信小游戏
     */
    public function get(): ApiOpenApiV30GameplayListGetRequest
    {
        return new ApiOpenApiV30GameplayListGetRequest($this);
    }
}
