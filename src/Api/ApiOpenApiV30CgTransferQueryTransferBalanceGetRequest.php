<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_query_transfer_balance_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询账户自身转账余额、作为减款方需要预留的竞价消耗保证金
 */
class ApiOpenApiV30CgTransferQueryTransferBalanceGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 请求id，推荐uuid，方便请求链路对齐 */
    private ?string $bizRequestNo = null;
    /** @var int 代理商账户id，用于鉴权 */
    private ?int $agentId = null;
    /** @var int[] 查询账户id列表 */
    private ?array $accountIdList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferQueryTransferBalanceV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 请求id，推荐uuid，方便请求链路对齐
     */
    public function bizRequestNo(string $bizRequestNo): self
    {
        $this->bizRequestNo = $bizRequestNo;
        return $this;
    }

    /**
     * 代理商账户id，用于鉴权
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 查询账户id列表
     */
    public function accountIdList(array $accountIdList): self
    {
        $this->accountIdList = $accountIdList;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * 查询账户自身转账余额、作为减款方需要预留的竞价消耗保证金
     */
    public function execute(): \Oceanengine\Models\CgTransferQueryTransferBalanceV30Response
    {
        if ($this->bizRequestNo === null) {
            throw new \InvalidArgumentException('bizRequestNo is required and must be specified');
        }
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->accountIdList === null) {
            throw new \InvalidArgumentException('accountIdList is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['biz_request_no'] = $this->bizRequestNo;
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['account_id_list'] = $this->accountIdList;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/query_transfer_balance/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferQueryTransferBalanceV30Response::class);

        return $result['model'];
    }
}
