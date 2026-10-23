<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询安卓应用母包
 */
class ApiOpenApiV30ToolsEbpAppDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    /** @var string 操作类型 BP/AD */
    private ?string $accountType = null;
    private ?string $packageId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpAppDetailV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 操作类型 BP/AD
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function packageId(string $packageId): self
    {
        $this->packageId = $packageId;
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
     * 查询安卓应用母包
     */
    public function execute(): \Oceanengine\Models\ToolsEbpAppDetailV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->packageId === null) {
            throw new \InvalidArgumentException('packageId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['package_id'] = $this->packageId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/app/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpAppDetailV30Response::class);

        return $result['model'];
    }
}
