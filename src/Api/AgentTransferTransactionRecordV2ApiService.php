<?php

/**
 * 本文件由 go2php 生成，源: api_agent_transfer_transaction_record_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentTransferTransactionRecordV2ApiService
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
     * 代理商转账记录查询，相关功能与商务-转账记录-账户转账记录
     */
    public function get(): ApiOpenApi2AgentTransferTransactionRecordGetRequest
    {
        return new ApiOpenApi2AgentTransferTransactionRecordGetRequest($this);
    }
}
