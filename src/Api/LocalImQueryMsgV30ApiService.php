<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_query_msg_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalImQueryMsgV30ApiService
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
     * 根据msgId查询已经推送出去的原始消息
     */
    public function get(): ApiOpenApiV30LocalImQueryMsgGetRequest
    {
        return new ApiOpenApiV30LocalImQueryMsgGetRequest($this);
    }
}
