<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_main_wallet_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询当前共享钱包(大钱包)的信息
 */
class ApiOpenApiV30SharedWalletMainWalletGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID，对于巨量AD、千川、本地推是广告主ID，对于代理商是代理商ID */
    private ?int $accountId = null;
    /** @var int 共享钱包ID即大钱包ID */
    private ?int $mainWalletId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletMainWalletGetV30ApiService $service)
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
     * 共享钱包ID即大钱包ID
     */
    public function mainWalletId(int $mainWalletId): self
    {
        $this->mainWalletId = $mainWalletId;
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
     * 查询当前共享钱包(大钱包)的信息
     */
    public function execute(): \Oceanengine\Models\SharedWalletMainWalletGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->mainWalletId === null) {
            throw new \InvalidArgumentException('mainWalletId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['main_wallet_id'] = $this->mainWalletId;
        $queryParams['account_type'] = $this->accountType;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/main_wallet/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletMainWalletGetV30Response::class);

        return $result['model'];
    }
}
