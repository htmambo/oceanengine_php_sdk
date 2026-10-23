<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_subject_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpSubjectListV30ApiService
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
     * 获取团队关联认证的主体列表
     */
    public function get(): ApiOpenApiV30ToolsEbpSubjectListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpSubjectListGetRequest($this);
    }
}
