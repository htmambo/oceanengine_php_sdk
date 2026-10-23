<?php

/**
 * 本文件由 go2php 生成，源: api_local_charge_result_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询充值结果，确认充值状态
 */
class ApiOpenApiV30LocalChargeResultGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 本地推广告账户ID */
    private ?int $localAccountId = null;
    /** @var int 充值单ID */
    private ?int $chargeOrderId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalChargeResultV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 本地推广告账户ID
     */
    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 充值单ID
     */
    public function chargeOrderId(int $chargeOrderId): self
    {
        $this->chargeOrderId = $chargeOrderId;
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
     * 查询充值结果，确认充值状态
     */
    public function execute(): \Oceanengine\Models\LocalChargeResultV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->chargeOrderId === null) {
            throw new \InvalidArgumentException('chargeOrderId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['charge_order_id'] = $this->chargeOrderId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/charge/result/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalChargeResultV30Response::class);

        return $result['model'];
    }
}
