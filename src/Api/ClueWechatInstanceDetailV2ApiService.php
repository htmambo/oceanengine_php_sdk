<?php

/**
 * 本文件由 go2php 生成，源: api_clue_wechat_instance_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueWechatInstanceDetailV2ApiService
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
     * 获取指定微信号码包详情
     */
    public function get(): ApiOpenApi2ClueWechatInstanceDetailGetRequest
    {
        return new ApiOpenApi2ClueWechatInstanceDetailGetRequest($this);
    }
}
