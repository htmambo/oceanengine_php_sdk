<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_track_url_check_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanTrackUrlCheckV10ApiService
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
     * 开发文档：https://bytedance.feishu.cn/wiki/wikcnHM6yUStX7cq9noC9fSWqz7
     * 千川RD：@郭丰瑞 @杨旭
     * MAPI RD：@郭卜滔
     * PM：@朱颖波
     */
    public function get(): ApiOpenApiV10QianchuanTrackUrlCheckGetRequest
    {
        return new ApiOpenApiV10QianchuanTrackUrlCheckGetRequest($this);
    }
}
