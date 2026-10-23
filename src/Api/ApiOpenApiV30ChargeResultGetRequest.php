<?php

/**
 * 本文件由 go2php 生成，源: api_charge_result_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据充值单查询充值结果接口
 */
class ApiOpenApiV30ChargeResultGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主或代理商账户ID */
    private ?int $advertiserId = null;
    /** @var int 充值单号 */
    private ?int $chargeOrderId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ChargeResultV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主或代理商账户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 充值单号
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
     * 根据充值单查询充值结果接口
     */
    public function execute(): \Oceanengine\Models\ChargeResultV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->chargeOrderId === null) {
            throw new \InvalidArgumentException('chargeOrderId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['charge_order_id'] = $this->chargeOrderId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/charge/result/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ChargeResultV30Response::class);

        return $result['model'];
    }
}
