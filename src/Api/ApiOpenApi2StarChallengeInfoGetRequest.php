<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取投稿任务信息
 */
class ApiOpenApi2StarChallengeInfoGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户星图ID */
    private ?int $starId = null;
    /** @var int[] 投稿任务ID，不超过20个 */
    private ?array $challengeTaskIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeInfoV2ApiService $service)
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
     * 投稿任务ID，不超过20个
     */
    public function challengeTaskIds(array $challengeTaskIds): self
    {
        $this->challengeTaskIds = $challengeTaskIds;
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
     * 获取投稿任务信息
     */
    public function execute(): \Oceanengine\Models\StarChallengeInfoV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->challengeTaskIds === null) {
            throw new \InvalidArgumentException('challengeTaskIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['challenge_task_ids'] = $this->challengeTaskIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeInfoV2Response::class);

        return $result['model'];
    }
}
