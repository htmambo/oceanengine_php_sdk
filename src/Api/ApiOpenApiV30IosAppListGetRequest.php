<?php

/**
 * 本文件由 go2php 生成，源: api_ios_app_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 最新查询IOS应用列表
 */
class ApiOpenApiV30IosAppListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?int $page = null;
    private ?int $size = null;
    private ?string $searchKey = null;
    private ?string $status = null;
    /** @var string 查询类型，针对basicIos 有效 */
    private ?string $searchType = null;
    /** @var string 账户资产查询范围 */
    private ?string $accountAssetQueryScope = null;
    /** @var string 操作类型 EBP/AD */
    private ?string $accountType = null;
    /** @var string EBP 查询层级，默认直联 */
    private ?string $hierarchy = null;
    /** @var \Oceanengine\Models\IosAppListV30PublishTime 发布时间 */
    private ?\Oceanengine\Models\IosAppListV30PublishTime $publishTime = null;
    /** @var string 资产版本类型 */
    private ?string $assetGeneration = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(IosAppListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function size(int $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function searchKey(string $searchKey): self
    {
        $this->searchKey = $searchKey;
        return $this;
    }

    public function status(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 查询类型，针对basicIos 有效
     */
    public function searchType(string $searchType): self
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * 账户资产查询范围
     */
    public function accountAssetQueryScope(string $accountAssetQueryScope): self
    {
        $this->accountAssetQueryScope = $accountAssetQueryScope;
        return $this;
    }

    /**
     * 操作类型 EBP/AD
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * EBP 查询层级，默认直联
     */
    public function hierarchy(string $hierarchy): self
    {
        $this->hierarchy = $hierarchy;
        return $this;
    }

    /**
     * 发布时间
     */
    public function publishTime(\Oceanengine\Models\IosAppListV30PublishTime $publishTime): self
    {
        $this->publishTime = $publishTime;
        return $this;
    }

    /**
     * 资产版本类型
     */
    public function assetGeneration(string $assetGeneration): self
    {
        $this->assetGeneration = $assetGeneration;
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
     * 最新查询IOS应用列表
     */
    public function execute(): \Oceanengine\Models\IosAppListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->size !== null) {
            $queryParams['size'] = $this->size;
        }
        if ($this->searchKey !== null) {
            $queryParams['search_key'] = $this->searchKey;
        }
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->searchType !== null) {
            $queryParams['search_type'] = $this->searchType;
        }
        if ($this->accountAssetQueryScope !== null) {
            $queryParams['account_asset_query_scope'] = $this->accountAssetQueryScope;
        }
        if ($this->accountType !== null) {
            $queryParams['account_type'] = $this->accountType;
        }
        if ($this->hierarchy !== null) {
            $queryParams['hierarchy'] = $this->hierarchy;
        }
        if ($this->publishTime !== null) {
            $__encoded0 = json_encode($this->publishTime);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: publishTime');
            }
            $queryParams['publish_time'] = $__encoded0;
        }
        if ($this->assetGeneration !== null) {
            $queryParams['asset_generation'] = $this->assetGeneration;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ios_app/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\IosAppListV30Response::class);

        return $result['model'];
    }
}
