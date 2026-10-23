<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aip_third_site_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAipThirdSiteCreateV2ApiService
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
     * 通过此接口，开发者可以创建标准第三方落地页站点。
     * > 注意：因校验落地页是否为标准第三方落地页是异步进行的，所以创建时若落地页不符合标准落地页规范，也可创建成功。开发者可通过【获取标准第三方落地页站点】接口返回的校验状态validate_status确认是否成功创建标准第三方落地页。
     */
    public function post(): ApiOpenApi2ToolsAipThirdSiteCreatePostRequest
    {
        return new ApiOpenApi2ToolsAipThirdSiteCreatePostRequest($this);
    }
}
