<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_get_push_ad_results_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询投稿任务广告推送结果
 */
class ApiOpenApi2StarChallengeGetPushAdResultsGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户星图ID */
    private ?int $starId = null;
    /** @var int 投稿任务ID */
    private ?int $challengeTaskId = null;
    /** @var int[] 作品ID列表，单次最多50个 */
    private ?array $itemIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeGetPushAdResultsV2ApiService $service)
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
     * 作品ID列表，单次最多50个
     */
    public function itemIds(array $itemIds): self
    {
        $this->itemIds = $itemIds;
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
     * 查询投稿任务广告推送结果
     */
    public function execute(): \Oceanengine\Models\StarChallengeGetPushAdResultsV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->challengeTaskId === null) {
            throw new \InvalidArgumentException('challengeTaskId is required and must be specified');
        }
        if ($this->itemIds === null) {
            throw new \InvalidArgumentException('itemIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['challenge_task_id'] = $this->challengeTaskId;
        $queryParams['item_ids'] = $this->itemIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/get_push_ad_results/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeGetPushAdResultsV2Response::class);

        return $result['model'];
    }
}
