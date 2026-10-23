<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_qianchuan_video_star_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanQianchuanVideoStarGetV10ApiService
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
     * 获取星图达人视频
     * https://bytedance.larkoffice.com/wiki/DMjkwqmcOi4SlHkj9EVckgOGnxf
     */
    public function get(): ApiOpenApiV10QianchuanQianchuanVideoStarGetGetRequest
    {
        return new ApiOpenApiV10QianchuanQianchuanVideoStarGetGetRequest($this);
    }
}
