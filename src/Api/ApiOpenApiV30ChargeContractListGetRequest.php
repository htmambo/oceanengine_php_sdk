<?php

/**
 * 本文件由 go2php 生成，源: api_charge_contract_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 充值可用合同查询
 */
class ApiOpenApiV30ChargeContractListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主账号ID 和 客户ID必须传一个 */
    private ?int $accountId = null;
    /** @var int 充值类型 */
    private ?int $chargeType = null;
    /** @var int 业务平台 */
    private ?int $platform = null;
    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 调用方 */
    private ?int $caller = null;
    /** @var int 客户ID */
    private ?int $customerId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ChargeContractListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主账号ID 和 客户ID必须传一个
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 充值类型
     */
    public function chargeType(int $chargeType): self
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * 业务平台
     */
    public function platform(int $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 调用方
     */
    public function caller(int $caller): self
    {
        $this->caller = $caller;
        return $this;
    }

    /**
     * 客户ID
     */
    public function customerId(int $customerId): self
    {
        $this->customerId = $customerId;
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
     * 充值可用合同查询
     */
    public function execute(): \Oceanengine\Models\ChargeContractListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->chargeType === null) {
            throw new \InvalidArgumentException('chargeType is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        $queryParams['account_id'] = $this->accountId;
        $queryParams['charge_type'] = $this->chargeType;
        $queryParams['platform'] = $this->platform;
        if ($this->caller !== null) {
            $queryParams['caller'] = $this->caller;
        }
        if ($this->customerId !== null) {
            $queryParams['customer_id'] = $this->customerId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/charge_contract/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ChargeContractListV30Response::class);

        return $result['model'];
    }
}
