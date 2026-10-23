<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_adv_operation_log_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询ADV粒度的共享钱包操作记录
 */
class ApiOpenApiV30SharedWalletWalletAdvOperationLogGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    /** @var string 账号类型，代理商/直客/ADV */
    private ?string $accountType = null;
    /** @var int 操作的目标 */
    private ?int $walletId = null;
    /** @var \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30Filtering 过滤条件 */
    private ?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30Filtering $filtering = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 每页数量 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletWalletAdvOperationLogGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账号类型，代理商/直客/ADV
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 操作的目标
     */
    public function walletId(int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 每页数量
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 查询ADV粒度的共享钱包操作记录
     */
    public function execute(): \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->walletId === null) {
            throw new \InvalidArgumentException('walletId is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->page < 1) {
            throw new \InvalidArgumentException('page must be greater than 1');
        }
        if ($this->page > 10000) {
            throw new \InvalidArgumentException('page must be less than 10000');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize < 10) {
            throw new \InvalidArgumentException('pageSize must be greater than 10');
        }
        if ($this->pageSize > 100) {
            throw new \InvalidArgumentException('pageSize must be less than 100');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['wallet_id'] = $this->walletId;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/wallet_adv_operation_log/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30Response::class);

        return $result['model'];
    }
}
