<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aip_third_site_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAipThirdSiteGetV2ApiService
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
     * 通过此接口，开发者可以获取广告主下标准第三方落地页站点详情。
     * > 需要注意的是预审的结果和最终的素材的审核结果可能存在出入，预审结果仅供参考。
     */
    public function get(): ApiOpenApi2ToolsAipThirdSiteGetGetRequest
    {
        return new ApiOpenApi2ToolsAipThirdSiteGetGetRequest($this);
    }
}
