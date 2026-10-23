<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvertiserUpdateV2ApiService
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
     * 修改广告主信息，可更改内容包括账户名称、联系人、手机号码、固定电话、备注，除此之外其他内容不允许修改。
     */
    public function post(): ApiOpenApi2AgentAdvertiserUpdatePostRequest
    {
        return new ApiOpenApi2AgentAdvertiserUpdatePostRequest($this);
    }
}
