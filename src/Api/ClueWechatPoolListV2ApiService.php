<?php

/**
 * 本文件由 go2php 生成，源: api_clue_wechat_pool_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueWechatPoolListV2ApiService
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
     * 支持按页查询广告主账户下的全部微信
     */
    public function get(): ApiOpenApi2ClueWechatPoolListGetRequest
    {
        return new ApiOpenApi2ClueWechatPoolListGetRequest($this);
    }
}
