<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_preview_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteTemplatePreviewV2ApiService
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
     * 通过此接口，用户可以预览通过【基于站点创建模板】接口创建的落地页模板。
     * > 需要注意的是，落地页模板的预览链接有效时间为20分钟。
     */
    public function get(): ApiOpenApi2ToolsSiteTemplatePreviewGetRequest
    {
        return new ApiOpenApi2ToolsSiteTemplatePreviewGetRequest($this);
    }
}
