<?php

/**
 * 本文件由 go2php 生成，源: api_charge_verify_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 校验广告主是否可以充值
 */
class ApiOpenApiV30ChargeVerifyGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $ccAccountId = null;
    /** @var int 广告主ID */
    private ?int $accountId = null;
    /** @var string 业务线 */
    private ?string $platform = null;
    /** @var string 唯一请求参数 */
    private ?string $requestId = null;
    /** @var string 充值类型 */
    private ?string $chargeType = null;
    /** @var string 充值来源 */
    private ?string $chargeSource = null;
    /** @var string 请求方 */
    private ?string $caller = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ChargeVerifyGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ccAccountId(int $ccAccountId): self
    {
        $this->ccAccountId = $ccAccountId;
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
    public function platform(string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 唯一请求参数
     */
    public function requestId(string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * 充值类型
     */
    public function chargeType(string $chargeType): self
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * 充值来源
     */
    public function chargeSource(string $chargeSource): self
    {
        $this->chargeSource = $chargeSource;
        return $this;
    }

    /**
     * 请求方
     */
    public function caller(string $caller): self
    {
        $this->caller = $caller;
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
     * 校验广告主是否可以充值
     */
    public function execute(): \Oceanengine\Models\ChargeVerifyGetV30Response
    {
        if ($this->ccAccountId === null) {
            throw new \InvalidArgumentException('ccAccountId is required and must be specified');
        }
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        if ($this->requestId === null) {
            throw new \InvalidArgumentException('requestId is required and must be specified');
        }
        if ($this->chargeType === null) {
            throw new \InvalidArgumentException('chargeType is required and must be specified');
        }
        if ($this->chargeSource === null) {
            throw new \InvalidArgumentException('chargeSource is required and must be specified');
        }
        if ($this->caller === null) {
            throw new \InvalidArgumentException('caller is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['cc_account_id'] = $this->ccAccountId;
        $queryParams['account_id'] = $this->accountId;
        $queryParams['platform'] = $this->platform;
        $queryParams['request_id'] = $this->requestId;
        $queryParams['charge_type'] = $this->chargeType;
        $queryParams['charge_source'] = $this->chargeSource;
        $queryParams['caller'] = $this->caller;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/charge/verify/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ChargeVerifyGetV30Response::class);

        return $result['model'];
    }
}
