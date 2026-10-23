<?php

/**
 * 本文件由 go2php 生成，源: api_tools_tools_task_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持查询OC范围下所有异步任务处理进度
 */
class ApiOpenApiV30ToolsToolsTaskGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户ID */
    private ?int $advertiserId = null;
    /** @var int[] 任务ID 长度：[0，100]，不传则默认获取该adv下所有任务 任务ID获取：可以在【更新标准项目】接口中获取，当前仅针对星广联投项目开关会通过更新接口返回对应taskid，其他的异步任务（平台会触发的，比如批量修改出价等）不会返回对应的task_id。因此筛选也支持此类场景。 */
    private ?array $taskIds = null;
    /** @var string[] 任务状态 */
    private ?array $taskStatus = null;
    /** @var int 页数，默认值1，范围[1,xxxx] */
    private ?int $page = null;
    /** @var int 页面大小，默认值10，范围[1,100] */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsToolsTaskGetV30ApiService $service)
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
     * 任务ID 长度：[0，100]，不传则默认获取该adv下所有任务 任务ID获取：可以在【更新标准项目】接口中获取，当前仅针对星广联投项目开关会通过更新接口返回对应taskid，其他的异步任务（平台会触发的，比如批量修改出价等）不会返回对应的task_id。因此筛选也支持此类场景。
     */
    public function taskIds(array $taskIds): self
    {
        $this->taskIds = $taskIds;
        return $this;
    }

    /**
     * 任务状态
     */
    public function taskStatus(array $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
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
     * 页面大小，默认值10，范围[1,100]
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
     * 支持查询OC范围下所有异步任务处理进度
     */
    public function execute(): \Oceanengine\Models\ToolsToolsTaskGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->taskIds !== null) {
            $queryParams['task_ids'] = $this->taskIds;
        }
        if ($this->taskStatus !== null) {
            $queryParams['task_status'] = $this->taskStatus;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/tools_task/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsToolsTaskGetV30Response::class);

        return $result['model'];
    }
}
