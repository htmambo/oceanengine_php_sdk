<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_v3_wallet_transfer_detail_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询单个转账单信息
 */
class ApiOpenApiV30CgTransferV3WalletTransferDetailGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 组织id */
    private ?int $organizationId = null;
    /** @var string 登录用户类型 */
    private ?string $userType = null;
    /** @var string 转账来源 */
    private ?string $origin = null;
    /** @var string 发起转账请求id（发起转账请求id、转账编号二选一传） */
    private ?string $transferBizRequestNo = null;
    /** @var string 转账编号（发起转账请求id、转账编号二选一传） */
    private ?string $transferSerial = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferV3WalletTransferDetailGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 组织id
     */
    public function organizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * 登录用户类型
     */
    public function userType(string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * 转账来源
     */
    public function origin(string $origin): self
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * 发起转账请求id（发起转账请求id、转账编号二选一传）
     */
    public function transferBizRequestNo(string $transferBizRequestNo): self
    {
        $this->transferBizRequestNo = $transferBizRequestNo;
        return $this;
    }

    /**
     * 转账编号（发起转账请求id、转账编号二选一传）
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
     * 查询单个转账单信息
     */
    public function execute(): \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30Response
    {
        if ($this->organizationId === null) {
            throw new \InvalidArgumentException('organizationId is required and must be specified');
        }
        if ($this->userType === null) {
            throw new \InvalidArgumentException('userType is required and must be specified');
        }
        if ($this->origin === null) {
            throw new \InvalidArgumentException('origin is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['organization_id'] = $this->organizationId;
        $queryParams['user_type'] = $this->userType;
        $queryParams['origin'] = $this->origin;
        if ($this->transferBizRequestNo !== null) {
            $queryParams['transfer_biz_request_no'] = $this->transferBizRequestNo;
        }
        if ($this->transferSerial !== null) {
            $queryParams['transfer_serial'] = $this->transferSerial;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/v3/wallet/transfer_detail/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30Response::class);

        return $result['model'];
    }
}
