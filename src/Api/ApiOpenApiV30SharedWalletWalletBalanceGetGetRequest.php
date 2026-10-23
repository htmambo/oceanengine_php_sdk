<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_balance_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 资金共享-批量查询钱包余额
 */
class ApiOpenApiV30SharedWalletWalletBalanceGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID，对于巨量AD、千川、本地推是广告主ID，对于代理商是代理商ID */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    /** @var int[] 资金共享钱包id列表，注意：传入的列表长度不可大于200 */
    private ?array $walletIdList = null;
    /** @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFilters 余额过滤条件 */
    private ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFilters $walletBalanceFilters = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletWalletBalanceGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户ID，对于巨量AD、千川、本地推是广告主ID，对于代理商是代理商ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 资金共享钱包id列表，注意：传入的列表长度不可大于200
     */
    public function walletIdList(array $walletIdList): self
    {
        $this->walletIdList = $walletIdList;
        return $this;
    }

    /**
     * 余额过滤条件
     */
    public function walletBalanceFilters(\Oceanengine\Models\SharedWalletWalletBalanceGetV30WalletBalanceFilters $walletBalanceFilters): self
    {
        $this->walletBalanceFilters = $walletBalanceFilters;
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
     * 资金共享-批量查询钱包余额
     */
    public function execute(): \Oceanengine\Models\SharedWalletWalletBalanceGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->walletIdList === null) {
            throw new \InvalidArgumentException('walletIdList is required and must be specified');
        }
        if (count($this->walletIdList) < 1) {
            throw new \InvalidArgumentException('walletIdList must have at least 1 elements');
        }
        if (count($this->walletIdList) > 200) {
            throw new \InvalidArgumentException('walletIdList must have less than 200 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['wallet_id_list'] = $this->walletIdList;
        if ($this->walletBalanceFilters !== null) {
            $__encoded0 = json_encode($this->walletBalanceFilters);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: walletBalanceFilters');
            }
            $queryParams['wallet_balance_filters'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/wallet_balance/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletWalletBalanceGetV30Response::class);

        return $result['model'];
    }
}
