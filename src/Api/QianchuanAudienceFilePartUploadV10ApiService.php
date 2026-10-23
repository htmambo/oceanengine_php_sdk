<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_audience_file_part_upload_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAudienceFilePartUploadV10ApiService
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
     * https://bytedance.feishu.cn/wiki/wikcnBy344NTluLkMQ9anjV5nff
     */
    public function post(): ApiOpenApiV10QianchuanAudienceFilePartUploadPostRequest
    {
        return new ApiOpenApiV10QianchuanAudienceFilePartUploadPostRequest($this);
    }
}
