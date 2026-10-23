<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_game_book_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取游戏预约列表
 */
class ApiOpenApiV30ToolsEbpAppGameBookListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 操作用户id */
    private ?int $accountId = null;
    /** @var string 操作账号类型 */
    private ?string $accountType = null;
    private ?string $assetOwnership = null;
    private ?string $assetManagementScope = null;
    /** @var string 搜索关键字 */
    private ?string $searchKey = null;
    /** @var \Oceanengine\Models\ToolsEbpAppGameBookListV30Filtering 过滤器 */
    private ?\Oceanengine\Models\ToolsEbpAppGameBookListV30Filtering $filtering = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;
    /** @var string 不传默认返回全部 */
    private ?string $assetGeneration = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpAppGameBookListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 操作用户id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 操作账号类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function assetOwnership(string $assetOwnership): self
    {
        $this->assetOwnership = $assetOwnership;
        return $this;
    }

    public function assetManagementScope(string $assetManagementScope): self
    {
        $this->assetManagementScope = $assetManagementScope;
        return $this;
    }

    /**
     * 搜索关键字
     */
    public function searchKey(string $searchKey): self
    {
        $this->searchKey = $searchKey;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\ToolsEbpAppGameBookListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 不传默认返回全部
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
     * 获取游戏预约列表
     */
    public function execute(): \Oceanengine\Models\ToolsEbpAppGameBookListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->assetOwnership === null) {
            throw new \InvalidArgumentException('assetOwnership is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        if ($this->assetManagementScope !== null) {
            $queryParams['asset_management_scope'] = $this->assetManagementScope;
        }
        $queryParams['account_type'] = $this->accountType;
        if ($this->searchKey !== null) {
            $queryParams['search_key'] = $this->searchKey;
        }
        $queryParams['asset_ownership'] = $this->assetOwnership;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->assetGeneration !== null) {
            $queryParams['asset_generation'] = $this->assetGeneration;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/app_game_book/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpAppGameBookListV30Response::class);

        return $result['model'];
    }
}
