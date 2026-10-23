<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_info_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueInfoUpdateV2ApiService
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
     * 通过线索id更新线索基础信息，更新后的信息会在飞鱼平台展示。
     * 目前只针对白名单用户开放，有下面两个限制：
     * 1. 有 develop_id 的白名单
     * 2. 支持更新的线索key有限制
     */
    public function post(): ApiOpenApi2ToolsClueInfoUpdatePostRequest
    {
        return new ApiOpenApi2ToolsClueInfoUpdatePostRequest($this);
    }
}
