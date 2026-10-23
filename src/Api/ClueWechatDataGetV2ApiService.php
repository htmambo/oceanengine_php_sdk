<?php

/**
 * 本文件由 go2php 生成，源: api_clue_wechat_data_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueWechatDataGetV2ApiService
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
     * 线索通获取微信加粉链路数据
     */
    public function get(): ApiOpenApi2ClueWechatDataGetGetRequest
    {
        return new ApiOpenApi2ClueWechatDataGetGetRequest($this);
    }
}
