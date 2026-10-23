<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_micro_applet_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取字节小程序列表
 */
class ApiOpenApiV30ToolsEbpMicroAppletListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    /** @var string 操作账号类型 */
    private ?string $accountType = null;
    private ?string $assetManagementScope = null;
    /** @var \Oceanengine\Models\ToolsEbpMicroAppletListV30Filtering 过滤器 */
    private ?\Oceanengine\Models\ToolsEbpMicroAppletListV30Filtering $filtering = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?string $assetGeneration = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpMicroAppletListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

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

    public function assetManagementScope(string $assetManagementScope): self
    {
        $this->assetManagementScope = $assetManagementScope;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\ToolsEbpMicroAppletListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * 获取字节小程序列表
     */
    public function execute(): \Oceanengine\Models\ToolsEbpMicroAppletListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->assetManagementScope === null) {
            throw new \InvalidArgumentException('assetManagementScope is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['asset_management_scope'] = $this->assetManagementScope;
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
        $url = '/open_api/v3.0/tools/ebp/micro_applet/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpMicroAppletListV30Response::class);

        return $result['model'];
    }
}
