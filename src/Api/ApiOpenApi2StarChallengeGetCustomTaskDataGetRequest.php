<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_get_custom_task_data_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 提供一个生态任务数据查询API，便于获取任务数据和投稿数据
 */
class ApiOpenApi2StarChallengeGetCustomTaskDataGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户星图ID */
    private ?int $starId = null;
    /** @var int 投稿任务ID */
    private ?int $challengeTaskId = null;
    /** @var int page */
    private ?int $page = null;
    /** @var int 小于100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeGetCustomTaskDataV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户星图ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 投稿任务ID
     */
    public function challengeTaskId(int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
        return $this;
    }

    /**
     * page
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 小于100
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
     * 提供一个生态任务数据查询API，便于获取任务数据和投稿数据
     */
    public function execute(): \Oceanengine\Models\StarChallengeGetCustomTaskDataV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->challengeTaskId === null) {
            throw new \InvalidArgumentException('challengeTaskId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize > 100) {
            throw new \InvalidArgumentException('pageSize must be less than 100');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['challenge_task_id'] = $this->challengeTaskId;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/get_custom_task_data/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeGetCustomTaskDataV2Response::class);

        return $result['model'];
    }
}
