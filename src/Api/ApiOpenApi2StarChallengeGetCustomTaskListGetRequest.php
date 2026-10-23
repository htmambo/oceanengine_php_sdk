<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_get_custom_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 提供客户进行自定义结算任务列表查询
 */
class ApiOpenApi2StarChallengeGetCustomTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    /** @var int 4-短视频，57-直播 */
    private ?int $taskCategory = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeGetCustomTaskListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 4-短视频，57-直播
     */
    public function taskCategory(int $taskCategory): self
    {
        $this->taskCategory = $taskCategory;
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
     * 提供客户进行自定义结算任务列表查询
     */
    public function execute(): \Oceanengine\Models\StarChallengeGetCustomTaskListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->taskCategory === null) {
            throw new \InvalidArgumentException('taskCategory is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['task_category'] = $this->taskCategory;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/get_custom_task_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeGetCustomTaskListV2Response::class);

        return $result['model'];
    }
}
