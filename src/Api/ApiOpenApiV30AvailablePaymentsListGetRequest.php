<?php

/**
 * 本文件由 go2php 生成，源: api_available_payments_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 充值-查询可用款项信息
 */
class ApiOpenApiV30AvailablePaymentsListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 业务线 */
    private ?int $platform = null;
    /** @var int 广告主ID */
    private ?int $accountId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AvailablePaymentsListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * 广告主ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
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
     * 充值-查询可用款项信息
     */
    public function execute(): \Oceanengine\Models\AvailablePaymentsListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['platform'] = $this->platform;
        $queryParams['account_id'] = $this->accountId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/available_payments/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AvailablePaymentsListV30Response::class);

        return $result['model'];
    }
}
