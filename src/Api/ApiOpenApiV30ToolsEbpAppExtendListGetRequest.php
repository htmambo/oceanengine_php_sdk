<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_extend_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 安卓应用分包列表
 */
class ApiOpenApiV30ToolsEbpAppExtendListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $packageId = null;
    /** @var string 操作账号类型 */
    private ?string $accountType = null;
    /** @var \Oceanengine\Models\ToolsEbpAppExtendListV30Filtering 过滤器 */
    private ?\Oceanengine\Models\ToolsEbpAppExtendListV30Filtering $filtering = null;
    /** @var \Oceanengine\Models\ToolsEbpAppExtendListV30UpdateTime 时间范围 */
    private ?\Oceanengine\Models\ToolsEbpAppExtendListV30UpdateTime $updateTime = null;
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpAppExtendListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function packageId(string $packageId): self
    {
        $this->packageId = $packageId;
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

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\ToolsEbpAppExtendListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 时间范围
     */
    public function updateTime(\Oceanengine\Models\ToolsEbpAppExtendListV30UpdateTime $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

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
     * 安卓应用分包列表
     */
    public function execute(): \Oceanengine\Models\ToolsEbpAppExtendListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->packageId === null) {
            throw new \InvalidArgumentException('packageId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        if ($this->accountType !== null) {
            $queryParams['account_type'] = $this->accountType;
        }
        $queryParams['package_id'] = $this->packageId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->updateTime !== null) {
            $__encoded1 = json_encode($this->updateTime);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: updateTime');
            }
            $queryParams['update_time'] = $__encoded1;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/app_extend/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpAppExtendListV30Response::class);

        return $result['model'];
    }
}
