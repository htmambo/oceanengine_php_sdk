<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteTemplateGetV2ApiService
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
     * 通过此接口，用户可以获取通过【基于站点创建模板】接口创建的落地页模板。
     * > 落地页的每个发布版本都可以创建落地页模板，一个落地页站点可以创建多个落地页模板。
     */
    public function get(): ApiOpenApi2ToolsSiteTemplateGetGetRequest
    {
        return new ApiOpenApi2ToolsSiteTemplateGetGetRequest($this);
    }
}
