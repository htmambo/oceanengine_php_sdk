<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aip_third_site_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAipThirdSiteUpdateV2ApiService
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
     * 开发者可以在修改完第三方落地页的内容后，调用此接口更新站点再次发起落地页标准化校验。
     * >  注意：因校验落地页是否为标准第三方落地页是异步进行的，所以更新时若落地页不符合标准落地页规范，也可更新成功。开发者可通过【获取标准第三方落地页站点】接口返回的校验状态validate_status确认是否成功创建标准第三方落地页。
     */
    public function post(): ApiOpenApi2ToolsAipThirdSiteUpdatePostRequest
    {
        return new ApiOpenApi2ToolsAipThirdSiteUpdatePostRequest($this);
    }
}
