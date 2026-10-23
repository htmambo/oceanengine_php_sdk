<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_keyword_package_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanKeywordPackageGetV10ApiService
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
     * 获取词包推荐关键词
     */
    public function get(): ApiOpenApiV10QianchuanKeywordPackageGetGetRequest
    {
        return new ApiOpenApiV10QianchuanKeywordPackageGetGetRequest($this);
    }
}
