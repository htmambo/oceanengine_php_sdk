<?php

/**
 * 本文件由 go2php 生成，源: api_business_platform_company_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取组织下全部主体
 */
class ApiOpenApiV30BusinessPlatformCompanyInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $organizationId = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BusinessPlatformCompanyInfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function organizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;
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
     * 获取组织下全部主体
     */
    public function execute(): \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30Response
    {
        if ($this->organizationId === null) {
            throw new \InvalidArgumentException('organizationId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['organization_id'] = $this->organizationId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/business_platform/company_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BusinessPlatformCompanyInfoGetV30Response::class);

        return $result['model'];
    }
}
