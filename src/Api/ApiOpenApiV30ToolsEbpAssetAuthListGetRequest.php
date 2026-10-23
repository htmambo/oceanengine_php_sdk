<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_asset_auth_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询授权范围
 */
class ApiOpenApiV30ToolsEbpAssetAuthListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?string $assetType = null;
    /** @var int 资产范围ID 单个资产传资产ID 组织直连资产和组织以及子组织资产传BPID */
    private ?int $assetScope = null;
    /** @var string 查询的资产范围类型 1-单个资产 2-组织直连资产 3-组织以及子组织资产 */
    private ?string $assetScopeType = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpAssetAuthListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function assetType(string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * 资产范围ID 单个资产传资产ID 组织直连资产和组织以及子组织资产传BPID
     */
    public function assetScope(int $assetScope): self
    {
        $this->assetScope = $assetScope;
        return $this;
    }

    /**
     * 查询的资产范围类型 1-单个资产 2-组织直连资产 3-组织以及子组织资产
     */
    public function assetScopeType(string $assetScopeType): self
    {
        $this->assetScopeType = $assetScopeType;
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
     * 查询授权范围
     */
    public function execute(): \Oceanengine\Models\ToolsEbpAssetAuthListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->assetType === null) {
            throw new \InvalidArgumentException('assetType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['asset_type'] = $this->assetType;
        if ($this->assetScope !== null) {
            $queryParams['asset_scope'] = $this->assetScope;
        }
        if ($this->assetScopeType !== null) {
            $queryParams['asset_scope_type'] = $this->assetScopeType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/asset/auth/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpAssetAuthListV30Response::class);

        return $result['model'];
    }
}
