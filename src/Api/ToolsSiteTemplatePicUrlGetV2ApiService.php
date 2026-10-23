<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_pic_url_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteTemplatePicUrlGetV2ApiService
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
     * 通过 site_id / template_id 获取站点/模板下的图片加签URL
     */
    public function get(): ApiOpenApi2ToolsSiteTemplatePicUrlGetGetRequest
    {
        return new ApiOpenApi2ToolsSiteTemplatePicUrlGetGetRequest($this);
    }
}
