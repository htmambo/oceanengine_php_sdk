<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_game_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 微信小游戏列表
 */
class ApiOpenApiV30ToolsEbpWechatGameListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?string $assetManagementScope = null;
    /** @var \Oceanengine\Models\ToolsEbpWechatGameListV30Filtering 过滤器 */
    private ?\Oceanengine\Models\ToolsEbpWechatGameListV30Filtering $filtering = null;
    /** @var int 第X页 */
    private ?int $page = null;
    /** @var int 每页数量 */
    private ?int $pageSize = null;
    private ?string $assetGeneration = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpWechatGameListV30ApiService $service)
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

    public function assetManagementScope(string $assetManagementScope): self
    {
        $this->assetManagementScope = $assetManagementScope;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\ToolsEbpWechatGameListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 第X页
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 每页数量
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

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
     * 微信小游戏列表
     */
    public function execute(): \Oceanengine\Models\ToolsEbpWechatGameListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        if ($this->accountType !== null) {
            $queryParams['account_type'] = $this->accountType;
        }
        if ($this->assetManagementScope !== null) {
            $queryParams['asset_management_scope'] = $this->assetManagementScope;
        }
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
        $url = '/open_api/v3.0/tools/ebp/wechat_game/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpWechatGameListV30Response::class);

        return $result['model'];
    }
}
