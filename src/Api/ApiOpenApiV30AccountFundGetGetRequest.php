<?php

/**
 * 本文件由 go2php 生成，源: api_account_fund_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询账号余额
 */
class ApiOpenApiV30AccountFundGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $accountIds = null;
    private ?string $accountType = null;
    private ?string $grantTypeSplit = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AccountFundGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountIds(array $accountIds): self
    {
        $this->accountIds = $accountIds;
        return $this;
    }

    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function grantTypeSplit(string $grantTypeSplit): self
    {
        $this->grantTypeSplit = $grantTypeSplit;
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
     * 查询账号余额
     */
    public function execute(): \Oceanengine\Models\AccountFundGetV30Response
    {
        if ($this->accountIds === null) {
            throw new \InvalidArgumentException('accountIds is required and must be specified');
        }
        if (count($this->accountIds) < 1) {
            throw new \InvalidArgumentException('accountIds must have at least 1 elements');
        }
        if (count($this->accountIds) > 50) {
            throw new \InvalidArgumentException('accountIds must have less than 50 elements');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_ids'] = $this->accountIds;
        $queryParams['account_type'] = $this->accountType;
        if ($this->grantTypeSplit !== null) {
            $queryParams['grant_type_split'] = $this->grantTypeSplit;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/account/fund/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AccountFundGetV30Response::class);

        return $result['model'];
    }
}
