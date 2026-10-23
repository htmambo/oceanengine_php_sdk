<?php

/**
 * 本文件由 go2php 生成，源: api_wallet_charge_verify_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询钱包账户是否可以充值
 */
class ApiOpenApiV30WalletChargeVerifyGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 组织ID */
    private ?int $accountId = null;
    /** @var int 钱包ID */
    private ?int $walletId = null;
    /** @var string 充值类型 */
    private ?string $chargeType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(WalletChargeVerifyGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 组织ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 钱包ID
     */
    public function walletId(int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * 充值类型
     */
    public function chargeType(string $chargeType): self
    {
        $this->chargeType = $chargeType;
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
     * 查询钱包账户是否可以充值
     */
    public function execute(): \Oceanengine\Models\WalletChargeVerifyGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->walletId === null) {
            throw new \InvalidArgumentException('walletId is required and must be specified');
        }
        if ($this->chargeType === null) {
            throw new \InvalidArgumentException('chargeType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['wallet_id'] = $this->walletId;
        $queryParams['charge_type'] = $this->chargeType;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/wallet/charge/verify/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\WalletChargeVerifyGetV30Response::class);

        return $result['model'];
    }
}
