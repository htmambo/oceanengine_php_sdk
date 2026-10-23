<?php

/**
 * 本文件由 go2php 生成，源: api_star_user_get_aweme_author_id_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarUserGetAwemeAuthorIdV2ApiService
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
     * 根据star_id反查抖音aweme_author_id
     */
    public function get(): ApiOpenApi2StarUserGetAwemeAuthorIdGetRequest
    {
        return new ApiOpenApi2StarUserGetAwemeAuthorIdGetRequest($this);
    }
}
