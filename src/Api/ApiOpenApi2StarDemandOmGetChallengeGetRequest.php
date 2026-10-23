<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_get_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 小程序查询任务详情
 */
class ApiOpenApi2StarDemandOmGetChallengeGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户星图ID */
    private ?int $starId = null;
    /** @var int 任务ID */
    private ?int $challengeTaskId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandOmGetChallengeV2ApiService $service)
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
     * 任务ID
     */
    public function challengeTaskId(int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
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
     * 小程序查询任务详情
     */
    public function execute(): \Oceanengine\Models\StarDemandOmGetChallengeV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->challengeTaskId === null) {
            throw new \InvalidArgumentException('challengeTaskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['challenge_task_id'] = $this->challengeTaskId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/om_get_challenge/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandOmGetChallengeV2Response::class);

        return $result['model'];
    }
}
