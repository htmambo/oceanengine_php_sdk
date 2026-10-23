<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_video_user_lose_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportVideoUserLoseGetV10ApiService
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
     * 视频互动流失数据
     */
    public function get(): ApiOpenApiV10QianchuanReportVideoUserLoseGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportVideoUserLoseGetGetRequest($this);
    }
}
