<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_aweme_auth_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanToolsAwemeAuthV10ApiService
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
     * 广告主授权抖音号，仅供曾经在pc进行过抖音号授权的广告主使用
     * https://bytedance.feishu.cn/wiki/BZdCwMstNirkpYkfPV0cgHSLn7g
     */
    public function post(): ApiOpenApiV10QianchuanToolsAwemeAuthPostRequest
    {
        return new ApiOpenApiV10QianchuanToolsAwemeAuthPostRequest($this);
    }
}
