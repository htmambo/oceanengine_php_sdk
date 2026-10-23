<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_sharing_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询星广联投任务共享详情
 */
class ApiOpenApiV30StardeliveryTaskSharingListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户id */
    private ?int $advertiserId = null;
    /** @var int 星广联投任务id */
    private ?int $starTaskId = null;
    /** @var int 页数，默认1 */
    private ?int $page = null;
    /** @var int 页面大小，默认10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StardeliveryTaskSharingListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告账户id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 星广联投任务id
     */
    public function starTaskId(int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
        return $this;
    }

    /**
     * 页数，默认1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认10
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
     * 查询星广联投任务共享详情
     */
    public function execute(): \Oceanengine\Models\StardeliveryTaskSharingListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->starTaskId === null) {
            throw new \InvalidArgumentException('starTaskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['star_task_id'] = $this->starTaskId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/stardelivery/task/sharing/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StardeliveryTaskSharingListV30Response::class);

        return $result['model'];
    }
}
