<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_transfer_balance_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询账户自身转账余额、作为转出方需要预留的竞价消耗保证金
 */
class ApiOpenApiV30CgTransferTransferBalanceGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 组织id */
    private ?int $organizationId = null;
    /** @var string 请求id，推荐uuid，方便请求链路对齐 */
    private ?string $bizRequestNo = null;
    /** @var int[] 查询账户id列表(限制长度100) */
    private ?array $targetIdList = null;
    /** @var string 业务线 */
    private ?string $platform = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferTransferBalanceGetV30ApiService $service)
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
     * 请求id，推荐uuid，方便请求链路对齐
     */
    public function bizRequestNo(string $bizRequestNo): self
    {
        $this->bizRequestNo = $bizRequestNo;
        return $this;
    }

    /**
     * 查询账户id列表(限制长度100)
     */
    public function targetIdList(array $targetIdList): self
    {
        $this->targetIdList = $targetIdList;
        return $this;
    }

    /**
     * 业务线
     */
    public function platform(string $platform): self
    {
        $this->platform = $platform;
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
     * 查询账户自身转账余额、作为转出方需要预留的竞价消耗保证金
     */
    public function execute(): \Oceanengine\Models\CgTransferTransferBalanceGetV30Response
    {
        if ($this->organizationId === null) {
            throw new \InvalidArgumentException('organizationId is required and must be specified');
        }
        if ($this->bizRequestNo === null) {
            throw new \InvalidArgumentException('bizRequestNo is required and must be specified');
        }
        if ($this->targetIdList === null) {
            throw new \InvalidArgumentException('targetIdList is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['organization_id'] = $this->organizationId;
        $queryParams['biz_request_no'] = $this->bizRequestNo;
        $queryParams['target_id_list'] = $this->targetIdList;
        $queryParams['platform'] = $this->platform;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/transfer_balance/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferTransferBalanceGetV30Response::class);

        return $result['model'];
    }
}
