<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_material_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持按 ebp_id 查询该组织下的素材 mid 列表；查询条件与返回字段与现有 adv 维度素材列表接口对齐
 */
class ApiOpenApiV30ToolsEbpMaterialListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int EBP 组织 ID */
    private ?int $accountId = null;
    /** @var string all: 全部可见; self: 仅直属 */
    private ?string $materialRange = null;
    private ?\Oceanengine\Models\ToolsEbpMaterialListV30Filtering $filtering = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpMaterialListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * EBP 组织 ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * all: 全部可见; self: 仅直属
     */
    public function materialRange(string $materialRange): self
    {
        $this->materialRange = $materialRange;
        return $this;
    }

    public function filtering(\Oceanengine\Models\ToolsEbpMaterialListV30Filtering $filtering): self
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
     * 支持按 ebp_id 查询该组织下的素材 mid 列表；查询条件与返回字段与现有 adv 维度素材列表接口对齐
     */
    public function execute(): \Oceanengine\Models\ToolsEbpMaterialListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        if ($this->materialRange !== null) {
            $queryParams['material_range'] = $this->materialRange;
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
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/material/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpMaterialListV30Response::class);

        return $result['model'];
    }
}
