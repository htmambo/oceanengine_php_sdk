<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_star_task_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取EBP星广联投任务列表和数据
 */
class ApiOpenApiV30ToolsEbpStarTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    /** @var string 查询起始日期，时间格式：yyyy-mm-dd */
    private ?string $startDate = null;
    /** @var string 查询结束日期，时间格式：yyyy-mm-dd */
    private ?string $endDate = null;
    /** @var string 创建来源，允许值： - &#x60;MY_CREATIONS&#x60; 归属组织管理 - &#x60;SHARING&#x60; 组织被共享 */
    private ?string $starTaskSource = null;
    /** @var \Oceanengine\Models\ToolsEbpStarTaskListV30Filtering 过滤器 */
    private ?\Oceanengine\Models\ToolsEbpStarTaskListV30Filtering $filtering = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpStarTaskListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 查询起始日期，时间格式：yyyy-mm-dd
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 查询结束日期，时间格式：yyyy-mm-dd
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 创建来源，允许值： - &#x60;MY_CREATIONS&#x60; 归属组织管理 - &#x60;SHARING&#x60; 组织被共享
     */
    public function starTaskSource(string $starTaskSource): self
    {
        $this->starTaskSource = $starTaskSource;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\ToolsEbpStarTaskListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 排序字段
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序方式
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
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
     * 获取EBP星广联投任务列表和数据
     */
    public function execute(): \Oceanengine\Models\ToolsEbpStarTaskListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        if ($this->starTaskSource !== null) {
            $queryParams['star_task_source'] = $this->starTaskSource;
        }
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/star_task/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpStarTaskListV30Response::class);

        return $result['model'];
    }
}
