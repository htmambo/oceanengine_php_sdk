<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_transaction_detail_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 资金共享-查询钱包流水明细
 */
class ApiOpenApiV30SharedWalletTransactionDetailGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID，对于巨量AD、千川、本地推是广告主ID，对于代理商是代理商ID */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    /** @var int 共享钱包ID */
    private ?int $sharedWalletId = null;
    /** @var string 开始时间，格式YYYY-MM-DD */
    private ?string $startDate = null;
    /** @var string 结束时间，格式YYYY-MM-DD */
    private ?string $endDate = null;
    /** @var int 页码；默认为1 */
    private ?int $page = null;
    /** @var int 页面大小；默认为10; 注意：page*page_size不可大于10000 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletTransactionDetailGetV30ApiService $service)
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
     * 共享钱包ID
     */
    public function sharedWalletId(int $sharedWalletId): self
    {
        $this->sharedWalletId = $sharedWalletId;
        return $this;
    }

    /**
     * 开始时间，格式YYYY-MM-DD
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 结束时间，格式YYYY-MM-DD
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 页码；默认为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小；默认为10; 注意：page*page_size不可大于10000
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
     * 资金共享-查询钱包流水明细
     */
    public function execute(): \Oceanengine\Models\SharedWalletTransactionDetailGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->sharedWalletId === null) {
            throw new \InvalidArgumentException('sharedWalletId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['shared_wallet_id'] = $this->sharedWalletId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/transaction_detail/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletTransactionDetailGetV30Response::class);

        return $result['model'];
    }
}
