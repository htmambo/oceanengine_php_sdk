<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_rta_get_info_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DouplusRtaGetInfoV30ApiService
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
     * 查询客户获取RTA策略信息与数据
     */
    public function get(): ApiOpenApiV30DouplusRtaGetInfoGetRequest
    {
        return new ApiOpenApiV30DouplusRtaGetInfoGetRequest($this);
    }
}
