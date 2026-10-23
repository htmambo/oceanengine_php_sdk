<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_get_common_author_package_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarVasGetCommonAuthorPackageListV2ApiService
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
     * 获取八大人群包
     */
    public function get(): ApiOpenApi2StarVasGetCommonAuthorPackageListGetRequest
    {
        return new ApiOpenApi2StarVasGetCommonAuthorPackageListGetRequest($this);
    }
}
