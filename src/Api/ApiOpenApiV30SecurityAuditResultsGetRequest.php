<?php

/**
 * 本文件由 go2php 生成，源: api_security_audit_results_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 拉取送审对象ID的审核结果
 */
class ApiOpenApiV30SecurityAuditResultsGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商id */
    private ?int $accountId = null;
    /** @var int 送审对象ID */
    private ?int $objectId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SecurityAuditResultsV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 送审对象ID
     */
    public function objectId(int $objectId): self
    {
        $this->objectId = $objectId;
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
     * 拉取送审对象ID的审核结果
     */
    public function execute(): \Oceanengine\Models\SecurityAuditResultsV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->objectId === null) {
            throw new \InvalidArgumentException('objectId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['object_id'] = $this->objectId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/security/audit_results/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SecurityAuditResultsV30Response::class);

        return $result['model'];
    }
}
