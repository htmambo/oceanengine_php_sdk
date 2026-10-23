<?php

/**
 * 本文件由 go2php 生成，源: api_star_item_author_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarItemAuthorGetV2ApiService
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
     * 获取视频所有人信息
     */
    public function get(): ApiOpenApi2StarItemAuthorGetGetRequest
    {
        return new ApiOpenApi2StarItemAuthorGetGetRequest($this);
    }
}
