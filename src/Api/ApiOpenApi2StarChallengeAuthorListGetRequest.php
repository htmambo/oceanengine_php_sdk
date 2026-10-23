<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_author_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取可投稿达人
 */
class ApiOpenApi2StarChallengeAuthorListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户星图ID */
    private ?int $starId = null;
    /** @var int 投稿任务ID */
    private ?int $challengeTaskId = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页大小，最大100 */
    private ?int $limit = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeAuthorListV2ApiService $service)
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
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页大小，最大100
     */
    public function limit(int $limit): self
    {
        $this->limit = $limit;
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
     * 获取可投稿达人
     */
    public function execute(): \Oceanengine\Models\StarChallengeAuthorListV2Response
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
        if ($this->limit === null) {
            throw new \InvalidArgumentException('limit is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['challenge_task_id'] = $this->challengeTaskId;
        $queryParams['page'] = $this->page;
        $queryParams['limit'] = $this->limit;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/author_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeAuthorListV2Response::class);

        return $result['model'];
    }
}
