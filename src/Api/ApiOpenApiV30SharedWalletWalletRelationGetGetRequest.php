<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_relation_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询子钱包下绑定的adv列表, 支持分页
 */
class ApiOpenApiV30SharedWalletWalletRelationGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID，对于巨量AD、千川、本地推是广告主ID，对于代理商是代理商ID */
    private ?int $accountId = null;
    /** @var int 共享钱包ID */
    private ?int $sharedWalletId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    /** @var int 页码；默认为1 */
    private ?int $page = null;
    /** @var int 页面大小；默认为10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletWalletRelationGetV30ApiService $service)
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
     * 共享钱包ID
     */
    public function sharedWalletId(int $sharedWalletId): self
    {
        $this->sharedWalletId = $sharedWalletId;
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
     * 页码；默认为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小；默认为10
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
     * 查询子钱包下绑定的adv列表, 支持分页
     */
    public function execute(): \Oceanengine\Models\SharedWalletWalletRelationGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->sharedWalletId === null) {
            throw new \InvalidArgumentException('sharedWalletId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['shared_wallet_id'] = $this->sharedWalletId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $queryParams['account_type'] = $this->accountType;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/wallet_relation/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletWalletRelationGetV30Response::class);

        return $result['model'];
    }
}
