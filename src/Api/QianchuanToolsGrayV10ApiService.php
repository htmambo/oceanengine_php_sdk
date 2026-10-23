<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_gray_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanToolsGrayV10ApiService
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
     * - 需求文档：https://bytedance.feishu.cn/wiki/wikcnzdnNkJC4qmlmA3SuU4v05d - 开发：邓博 - PM：包宏权
     */
    public function get(): ApiOpenApiV10QianchuanToolsGrayGetRequest
    {
        return new ApiOpenApiV10QianchuanToolsGrayGetRequest($this);
    }
}
