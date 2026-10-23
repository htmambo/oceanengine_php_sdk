<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_demander_get_author_bind_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemanderDemanderGetAuthorBindInfoV2ApiService
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
     * 查询客户阵地达人绑定的星图账号信息
     */
    public function get(): ApiOpenApi2StarDemanderDemanderGetAuthorBindInfoGetRequest
    {
        return new ApiOpenApi2StarDemanderDemanderGetAuthorBindInfoGetRequest($this);
    }
}
