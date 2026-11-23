<?php

/**
 * 本文件由 go2php 生成，源: api_charge_order_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询对象名称
 */
class ApiOpenApiV30ChargeOrderInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 广告主ID */
    private ?int $accountId = null;
    /** @var int 业务线 */
    private ?int $platform = null;
    /** @var string 款项编号 */
    private ?string $paymentSerial = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ChargeOrderInfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告主ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 业务线
     */
    public function platform(int $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 款项编号
     */
    public function paymentSerial(string $paymentSerial): self
    {
        $this->paymentSerial = $paymentSerial;
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
     * 查询对象名称
     */
    public function execute(): \Oceanengine\Models\ChargeOrderInfoGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        if ($this->paymentSerial === null) {
            throw new \InvalidArgumentException('paymentSerial is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['account_id'] = $this->accountId;
        $queryParams['platform'] = $this->platform;
        $queryParams['payment_serial'] = $this->paymentSerial;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/charge_order_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ChargeOrderInfoGetV30Response::class);

        return $result['model'];
    }
}
