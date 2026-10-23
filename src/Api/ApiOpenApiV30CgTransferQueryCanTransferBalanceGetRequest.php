<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_query_can_transfer_balance_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询减款方与加款方之间最大可转金额，接口内已自动扣除需要预留的竞价消耗保证金，支持查询1:N转账的最大可转金额
 */
class ApiOpenApiV30CgTransferQueryCanTransferBalanceGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 请求id，推荐uuid，方便请求链路对齐 */
    private ?string $bizRequestNo = null;
    /** @var int 代理商账户id，用于鉴权 */
    private ?int $agentId = null;
    /** @var int 锚定账户id，1:N的1 */
    private ?int $accountId = null;
    /** @var int[] 目标账户id列表，1:N的N，需要列表内账户类型相同，最多支持100个 */
    private ?array $targetAccountIdList = null;
    /** @var string 转账方向，以目标账户视角确定 */
    private ?string $transferDirection = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferQueryCanTransferBalanceV30ApiService $service)
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
     * 锚定账户id，1:N的1
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 目标账户id列表，1:N的N，需要列表内账户类型相同，最多支持100个
     */
    public function targetAccountIdList(array $targetAccountIdList): self
    {
        $this->targetAccountIdList = $targetAccountIdList;
        return $this;
    }

    /**
     * 转账方向，以目标账户视角确定
     */
    public function transferDirection(string $transferDirection): self
    {
        $this->transferDirection = $transferDirection;
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
     * 查询减款方与加款方之间最大可转金额，接口内已自动扣除需要预留的竞价消耗保证金，支持查询1:N转账的最大可转金额
     */
    public function execute(): \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30Response
    {
        if ($this->bizRequestNo === null) {
            throw new \InvalidArgumentException('bizRequestNo is required and must be specified');
        }
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->targetAccountIdList === null) {
            throw new \InvalidArgumentException('targetAccountIdList is required and must be specified');
        }
        if ($this->transferDirection === null) {
            throw new \InvalidArgumentException('transferDirection is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['biz_request_no'] = $this->bizRequestNo;
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['account_id'] = $this->accountId;
        $queryParams['target_account_id_list'] = $this->targetAccountIdList;
        $queryParams['transfer_direction'] = $this->transferDirection;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/query_can_transfer_balance/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30Response::class);

        return $result['model'];
    }
}
