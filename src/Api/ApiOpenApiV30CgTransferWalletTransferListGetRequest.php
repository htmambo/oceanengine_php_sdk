<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_wallet_transfer_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过筛选条件捞取转账记录
 */
class ApiOpenApiV30CgTransferWalletTransferListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 鉴权账户id */
    private ?int $accountId = null;
    /** @var string 鉴权账户类型 */
    private ?string $accountType = null;
    /** @var string 请求id，推荐uuid，方便请求链路对齐 */
    private ?string $bizRequestNo = null;
    /** @var string 查询开始时间(转账创建时间) yyyy-MM-dd HH:mm:ss */
    private ?string $queryBeginTime = null;
    /** @var string 查询结束时间(转账创建时间) yyyy-MM-dd HH:mm:ss */
    private ?string $queryEndTime = null;
    /** @var int[] 需要查询的大小钱包id，加款方与减款方都需要包含在内 */
    private ?array $queryWalletIdList = null;
    /** @var \Oceanengine\Models\CgTransferWalletTransferListV30PageInfo 分页信息 */
    private ?\Oceanengine\Models\CgTransferWalletTransferListV30PageInfo $pageInfo = null;
    /** @var int 加款方id，可选，需要包含在query_wallet_id_list */
    private ?int $payeeId = null;
    /** @var int 减款方id，可选，需要包含在query_wallet_id_list */
    private ?int $remitterId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferWalletTransferListV30ApiService $service)
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
     * 查询开始时间(转账创建时间) yyyy-MM-dd HH:mm:ss
     */
    public function queryBeginTime(string $queryBeginTime): self
    {
        $this->queryBeginTime = $queryBeginTime;
        return $this;
    }

    /**
     * 查询结束时间(转账创建时间) yyyy-MM-dd HH:mm:ss
     */
    public function queryEndTime(string $queryEndTime): self
    {
        $this->queryEndTime = $queryEndTime;
        return $this;
    }

    /**
     * 需要查询的大小钱包id，加款方与减款方都需要包含在内
     */
    public function queryWalletIdList(array $queryWalletIdList): self
    {
        $this->queryWalletIdList = $queryWalletIdList;
        return $this;
    }

    /**
     * 分页信息
     */
    public function pageInfo(\Oceanengine\Models\CgTransferWalletTransferListV30PageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 加款方id，可选，需要包含在query_wallet_id_list
     */
    public function payeeId(int $payeeId): self
    {
        $this->payeeId = $payeeId;
        return $this;
    }

    /**
     * 减款方id，可选，需要包含在query_wallet_id_list
     */
    public function remitterId(int $remitterId): self
    {
        $this->remitterId = $remitterId;
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
     * 通过筛选条件捞取转账记录
     */
    public function execute(): \Oceanengine\Models\CgTransferWalletTransferListV30Response
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
        if ($this->queryBeginTime === null) {
            throw new \InvalidArgumentException('queryBeginTime is required and must be specified');
        }
        if ($this->queryEndTime === null) {
            throw new \InvalidArgumentException('queryEndTime is required and must be specified');
        }
        if ($this->queryWalletIdList === null) {
            throw new \InvalidArgumentException('queryWalletIdList is required and must be specified');
        }
        if ($this->pageInfo === null) {
            throw new \InvalidArgumentException('pageInfo is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['biz_request_no'] = $this->bizRequestNo;
        $queryParams['query_begin_time'] = $this->queryBeginTime;
        $queryParams['query_end_time'] = $this->queryEndTime;
        $queryParams['query_wallet_id_list'] = $this->queryWalletIdList;
        if ($this->payeeId !== null) {
            $queryParams['payee_id'] = $this->payeeId;
        }
        if ($this->remitterId !== null) {
            $queryParams['remitter_id'] = $this->remitterId;
        }
        $__encoded0 = json_encode($this->pageInfo);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageInfo');
            }
            $queryParams['page_info'] = $__encoded0;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/wallet/transfer/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferWalletTransferListV30Response::class);

        return $result['model'];
    }
}
