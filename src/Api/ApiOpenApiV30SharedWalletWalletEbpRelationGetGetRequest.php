<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_ebp_relation_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询组织下开通的钱包列表，支持大钱包、备款钱包、投放钱包、代理给客户授权的钱包
 */
class ApiOpenApiV30SharedWalletWalletEbpRelationGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 鉴权的组织id */
    private ?int $accountId = null;
    /** @var string 账号类型，BP工作台 */
    private ?string $accountType = null;
    /** @var int[] 查询钱包所属的组织id集合 */
    private ?array $ebpIds = null;
    /** @var string[] 查询的钱包类型集合 */
    private ?array $walletTypes = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletWalletEbpRelationGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 鉴权的组织id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账号类型，BP工作台
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 查询钱包所属的组织id集合
     */
    public function ebpIds(array $ebpIds): self
    {
        $this->ebpIds = $ebpIds;
        return $this;
    }

    /**
     * 查询的钱包类型集合
     */
    public function walletTypes(array $walletTypes): self
    {
        $this->walletTypes = $walletTypes;
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
     * 查询组织下开通的钱包列表，支持大钱包、备款钱包、投放钱包、代理给客户授权的钱包
     */
    public function execute(): \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->ebpIds === null) {
            throw new \InvalidArgumentException('ebpIds is required and must be specified');
        }
        if ($this->walletTypes === null) {
            throw new \InvalidArgumentException('walletTypes is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['ebp_ids'] = $this->ebpIds;
        $queryParams['wallet_types'] = $this->walletTypes;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/wallet_ebp_relation/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30Response::class);

        return $result['model'];
    }
}
