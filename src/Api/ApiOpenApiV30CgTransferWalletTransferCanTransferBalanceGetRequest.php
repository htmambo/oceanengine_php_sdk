<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_wallet_transfer_can_transfer_balance_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持查询减款方与加款方之间最大可转金额、减款方非品牌最大可转出金额、加款方非品牌最小转入金额
 */
class ApiOpenApiV30CgTransferWalletTransferCanTransferBalanceGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 鉴权账户 */
    private ?int $accountId = null;
    /** @var string 鉴权账户类型 */
    private ?string $accountType = null;
    /** @var string 请求id，推荐uuid，方便请求链路对齐 */
    private ?string $bizRequestNo = null;
    /** @var int 大钱包id */
    private ?int $mainWalletId = null;
    /** @var int[] 小钱包id列表 */
    private ?array $subWalletList = null;
    /** @var string 转账方向，以小钱包视角确定 */
    private ?string $transferDirection = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferWalletTransferCanTransferBalanceV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 鉴权账户
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
     * 大钱包id
     */
    public function mainWalletId(int $mainWalletId): self
    {
        $this->mainWalletId = $mainWalletId;
        return $this;
    }

    /**
     * 小钱包id列表
     */
    public function subWalletList(array $subWalletList): self
    {
        $this->subWalletList = $subWalletList;
        return $this;
    }

    /**
     * 转账方向，以小钱包视角确定
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
     * 支持查询减款方与加款方之间最大可转金额、减款方非品牌最大可转出金额、加款方非品牌最小转入金额
     */
    public function execute(): \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30Response
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
        if ($this->mainWalletId === null) {
            throw new \InvalidArgumentException('mainWalletId is required and must be specified');
        }
        if ($this->subWalletList === null) {
            throw new \InvalidArgumentException('subWalletList is required and must be specified');
        }
        if ($this->transferDirection === null) {
            throw new \InvalidArgumentException('transferDirection is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['biz_request_no'] = $this->bizRequestNo;
        $queryParams['main_wallet_id'] = $this->mainWalletId;
        $queryParams['sub_wallet_list'] = $this->subWalletList;
        $queryParams['transfer_direction'] = $this->transferDirection;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/wallet/transfer/can_transfer_balance/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30Response::class);

        return $result['model'];
    }
}
