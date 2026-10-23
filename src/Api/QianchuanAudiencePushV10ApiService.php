<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_audience_push_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAudiencePushV10ApiService
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
     * 技术文档：https://bytedance.feishu.cn/wiki/wikcnBy344NTluLkMQ9anjV5nff 开发：杨旭 PM：朱颖波
     */
    public function post(): ApiOpenApiV10QianchuanAudiencePushPostRequest
    {
        return new ApiOpenApiV10QianchuanAudiencePushPostRequest($this);
    }
}
