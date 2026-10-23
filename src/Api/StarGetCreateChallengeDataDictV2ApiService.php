<?php

/**
 * 本文件由 go2php 生成，源: api_star_get_create_challenge_data_dict_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarGetCreateChallengeDataDictV2ApiService
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
     * 获取投稿任务创建数据字典
     */
    public function get(): ApiOpenApi2StarGetCreateChallengeDataDictGetRequest
    {
        return new ApiOpenApi2StarGetCreateChallengeDataDictGetRequest($this);
    }
}
