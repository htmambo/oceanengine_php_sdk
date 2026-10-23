<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_brand_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class YuntuBrandInfoGetV30ApiService
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
     * 获取服务品牌的虚拟 adv 信息、行业信息、用户名称。
     */
    public function get(): ApiOpenApiV30YuntuBrandInfoGetGetRequest
    {
        return new ApiOpenApiV30YuntuBrandInfoGetGetRequest($this);
    }
}
