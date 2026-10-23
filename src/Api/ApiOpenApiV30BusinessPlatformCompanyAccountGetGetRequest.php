<?php

/**
 * 本文件由 go2php 生成，源: api_business_platform_company_account_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查看组织下主体的账户列表
 */
class ApiOpenApiV30BusinessPlatformCompanyAccountGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $organizationId = null;
    private ?int $companyId = null;
    private ?array $accountType = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BusinessPlatformCompanyAccountGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function organizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    public function companyId(int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    public function accountType(array $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 查看组织下主体的账户列表
     */
    public function execute(): \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30Response
    {
        if ($this->organizationId === null) {
            throw new \InvalidArgumentException('organizationId is required and must be specified');
        }
        if ($this->companyId === null) {
            throw new \InvalidArgumentException('companyId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['organization_id'] = $this->organizationId;
        $queryParams['company_id'] = $this->companyId;
        $queryParams['account_type'] = $this->accountType;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/business_platform/company_account/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BusinessPlatformCompanyAccountGetV30Response::class);

        return $result['model'];
    }
}
