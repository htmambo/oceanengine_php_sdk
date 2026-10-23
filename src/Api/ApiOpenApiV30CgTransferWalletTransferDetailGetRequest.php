<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_wallet_transfer_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 转账单信息，包括状态、转账钱包id、转账金额
 */
class ApiOpenApiV30CgTransferWalletTransferDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 鉴权账户id */
    private ?int $accountId = null;
    /** @var string 鉴权账户类型 */
    private ?string $accountType = null;
    /** @var string 请求id，推荐uuid，方便请求链路对齐 */
    private ?string $bizRequestNo = null;
    /** @var string 发起转账的幂等id */
    private ?string $transferBizRequestNo = null;
    /** @var string 转账单号，与transfer_biz_request_no两者传其一即可 */
    private ?string $transferSerial = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferWalletTransferDetailV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 鉴权账户id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 鉴权账户类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
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
     * 发起转账的幂等id
     */
    public function transferBizRequestNo(string $transferBizRequestNo): self
    {
        $this->transferBizRequestNo = $transferBizRequestNo;
        return $this;
    }

    /**
     * 转账单号，与transfer_biz_request_no两者传其一即可
     */
    public function transferSerial(string $transferSerial): self
    {
        $this->transferSerial = $transferSerial;
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
     * 转账单信息，包括状态、转账钱包id、转账金额
     */
    public function execute(): \Oceanengine\Models\CgTransferWalletTransferDetailV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->bizRequestNo === null) {
            throw new \InvalidArgumentException('bizRequestNo is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['biz_request_no'] = $this->bizRequestNo;
        if ($this->transferBizRequestNo !== null) {
            $queryParams['transfer_biz_request_no'] = $this->transferBizRequestNo;
        }
        if ($this->transferSerial !== null) {
            $queryParams['transfer_serial'] = $this->transferSerial;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/wallet/transfer/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferWalletTransferDetailV30Response::class);

        return $result['model'];
    }
}
