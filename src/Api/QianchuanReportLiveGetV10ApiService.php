<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_live_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportLiveGetV10ApiService
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
     * 获取今日直播数据。分析抖音号及直播间在竞价推广中的整体数据表现
     */
    public function get(): ApiOpenApiV10QianchuanReportLiveGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportLiveGetGetRequest($this);
    }
}
