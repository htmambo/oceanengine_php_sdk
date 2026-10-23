<?php

/**
 * 本文件由 go2php 生成，源: api_tools_tools_task_detail_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持查询OC范围下指定异步任务处理详情
 */
class ApiOpenApiV30ToolsToolsTaskDetailGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户ID */
    private ?int $advertiserId = null;
    /** @var int 任务ID */
    private ?int $taskId = null;
    /** @var int 页数，默认值1，范围[1,xxxx] */
    private ?int $page = null;
    /** @var int 页面大小，默认值10，范围[1,xxxx] */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsToolsTaskDetailGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * 页数，默认值1，范围[1,xxxx]
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值10，范围[1,xxxx]
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
     * 支持查询OC范围下指定异步任务处理详情
     */
    public function execute(): \Oceanengine\Models\ToolsToolsTaskDetailGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->taskId === null) {
            throw new \InvalidArgumentException('taskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['task_id'] = $this->taskId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/tools_task_detail/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsToolsTaskDetailGetV30Response::class);

        return $result['model'];
    }
}
