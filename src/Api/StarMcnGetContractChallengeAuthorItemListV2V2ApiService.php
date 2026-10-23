<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_get_contract_challenge_author_item_list_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnGetContractChallengeAuthorItemListV2V2ApiService
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
     * 机构承包-获取投后数据信息
     */
    public function get(): ApiOpenApi2StarMcnGetContractChallengeAuthorItemListV2GetRequest
    {
        return new ApiOpenApi2StarMcnGetContractChallengeAuthorItemListV2GetRequest($this);
    }
}
