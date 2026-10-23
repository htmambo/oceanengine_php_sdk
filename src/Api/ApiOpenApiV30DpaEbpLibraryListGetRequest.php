<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_library_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * [EBP]获取商品库列表
 */
class ApiOpenApiV30DpaEbpLibraryListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $accountType = null;
    /** @var int 商品库类型 */
    private ?int $storeType = null;
    /** @var string 商品库名称或 ID */
    private ?string $nameOrId = null;
    private ?int $offset = null;
    private ?int $limit = null;
    /** @var \Oceanengine\Models\DpaEbpLibraryListV30AssetQueryScope EBP资产查询范围，作用于归属于ebp部分的数据 */
    private ?\Oceanengine\Models\DpaEbpLibraryListV30AssetQueryScope $assetQueryScope = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpLibraryListV30ApiService $service)
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

    /**
     * 商品库类型
     */
    public function storeType(int $storeType): self
    {
        $this->storeType = $storeType;
        return $this;
    }

    /**
     * 商品库名称或 ID
     */
    public function nameOrId(string $nameOrId): self
    {
        $this->nameOrId = $nameOrId;
        return $this;
    }

    public function offset(int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function limit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * EBP资产查询范围，作用于归属于ebp部分的数据
     */
    public function assetQueryScope(\Oceanengine\Models\DpaEbpLibraryListV30AssetQueryScope $assetQueryScope): self
    {
        $this->assetQueryScope = $assetQueryScope;
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
     * [EBP]获取商品库列表
     */
    public function execute(): \Oceanengine\Models\DpaEbpLibraryListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        if ($this->storeType !== null) {
            $queryParams['store_type'] = $this->storeType;
        }
        if ($this->nameOrId !== null) {
            $queryParams['name_or_id'] = $this->nameOrId;
        }
        if ($this->offset !== null) {
            $queryParams['offset'] = $this->offset;
        }
        if ($this->limit !== null) {
            $queryParams['limit'] = $this->limit;
        }
        if ($this->assetQueryScope !== null) {
            $__encoded0 = json_encode($this->assetQueryScope);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: assetQueryScope');
            }
            $queryParams['asset_query_scope'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/library/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpLibraryListV30Response::class);

        return $result['model'];
    }
}
