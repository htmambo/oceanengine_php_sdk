<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_video_attributes_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpVideoAttributesListV30ApiService
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
     * 获取视频素材评估标签
     */
    public function get(): ApiOpenApiV30ToolsEbpVideoAttributesListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpVideoAttributesListGetRequest($this);
    }
}
