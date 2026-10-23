<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_send_msg_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalImSendMsgV30ApiService
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
     * 外部调用支持isv消息发送
     */
    public function post(): ApiOpenApiV30LocalImSendMsgPostRequest
    {
        return new ApiOpenApiV30LocalImSendMsgPostRequest($this);
    }
}
