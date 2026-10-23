<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_query_transfer_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 转账单信息，包括状态、双方账户、转账金额
 */
class ApiOpenApiV30CgTransferQueryTransferDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 请求id，推荐uuid，方便请求链路对齐 */
    private ?string $bizRequestNo = null;
    /** @var int 代理商账户id，用于鉴权 */
    private ?int $agentId = null;
    /** @var string 发起转账的幂等id */
    private ?string $transferBizRequestNo = null;
    /** @var string 转账单号，与transfer_biz_request_no两者传其一即可 */
    private ?string $transferSerial = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferQueryTransferDetailV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
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
     * 代理商账户id，用于鉴权
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
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
     * 转账单信息，包括状态、双方账户、转账金额
     */
    public function execute(): \Oceanengine\Models\CgTransferQueryTransferDetailV30Response
    {
        if ($this->bizRequestNo === null) {
            throw new \InvalidArgumentException('bizRequestNo is required and must be specified');
        }
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['biz_request_no'] = $this->bizRequestNo;
        $queryParams['agent_id'] = $this->agentId;
        if ($this->transferBizRequestNo !== null) {
            $queryParams['transfer_biz_request_no'] = $this->transferBizRequestNo;
        }
        if ($this->transferSerial !== null) {
            $queryParams['transfer_serial'] = $this->transferSerial;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/query_transfer_detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferQueryTransferDetailV30Response::class);

        return $result['model'];
    }
}
