<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_task_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查看异步任务执行进度/结果
 */
class ApiOpenApiV30EbpTaskInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 工作台组织ID */
    private ?int $enterpriseOrganizationId = null;
    /** @var int 任务ID */
    private ?int $taskId = null;
    /** @var \Oceanengine\Models\EbpTaskInfoGetV30Filter 过滤器 */
    private ?\Oceanengine\Models\EbpTaskInfoGetV30Filter $filter = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpTaskInfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 工作台组织ID
     */
    public function enterpriseOrganizationId(int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    /**
     * 任务ID
     */
    public function taskId(int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filter(\Oceanengine\Models\EbpTaskInfoGetV30Filter $filter): self
    {
        $this->filter = $filter;
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
     * 查看异步任务执行进度/结果
     */
    public function execute(): \Oceanengine\Models\EbpTaskInfoGetV30Response
    {
        if ($this->enterpriseOrganizationId === null) {
            throw new \InvalidArgumentException('enterpriseOrganizationId is required and must be specified');
        }
        if ($this->taskId === null) {
            throw new \InvalidArgumentException('taskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        $queryParams['task_id'] = $this->taskId;
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ebp/task_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpTaskInfoGetV30Response::class);

        return $result['model'];
    }
}
