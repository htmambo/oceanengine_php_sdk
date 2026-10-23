<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_share_account_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询应用共享范围 可通过请求参数organization_id 巨量纵横组织id和package_id应用包id，查询巨量纵横组织下某个应用的共享范围，具体返回信息见返回参数
 */
class ApiOpenApi2ToolsAppManagementShareAccountListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $organizationId = null;
    private ?string $packageId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?string $searchType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementShareAccountListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function organizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    public function packageId(string $packageId): self
    {
        $this->packageId = $packageId;
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

    public function searchType(string $searchType): self
    {
        $this->searchType = $searchType;
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
     * 查询应用共享范围 可通过请求参数organization_id 巨量纵横组织id和package_id应用包id，查询巨量纵横组织下某个应用的共享范围，具体返回信息见返回参数
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementShareAccountListV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->organizationId !== null) {
            $queryParams['organization_id'] = $this->organizationId;
        }
        if ($this->packageId !== null) {
            $queryParams['package_id'] = $this->packageId;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->searchType !== null) {
            $queryParams['search_type'] = $this->searchType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/share_account/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementShareAccountListV2Response::class);

        return $result['model'];
    }
}
