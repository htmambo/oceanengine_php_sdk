<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_search_word_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportSearchWordGetV10ApiService
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
     * 获取搜索词/关键词数据明细
     * https://bytedance.feishu.cn/wiki/wikcnIR2vVK0hZVlVLAWJ9dGpFb
     */
    public function get(): ApiOpenApiV10QianchuanReportSearchWordGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportSearchWordGetGetRequest($this);
    }
}
