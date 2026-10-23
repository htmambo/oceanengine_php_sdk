<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_video_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanVideoGetV10ApiService
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
     * - 需求文档：https://bytedance.feishu.cn/wiki/wikcnpPjYhvlMg6cV7xZPypDgHg
     * - 开发：郭丰瑞
     * - PM：朱颖波
     */
    public function get(): ApiOpenApiV10QianchuanVideoGetGetRequest
    {
        return new ApiOpenApiV10QianchuanVideoGetGetRequest($this);
    }
}
