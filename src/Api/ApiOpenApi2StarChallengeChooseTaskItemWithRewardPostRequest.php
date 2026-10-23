<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_choose_task_item_with_reward_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 为客户提供API进行选稿发奖
 */
class ApiOpenApi2StarChallengeChooseTaskItemWithRewardPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarChallengeChooseTaskItemWithRewardV2Request $starChallengeChooseTaskItemWithRewardV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeChooseTaskItemWithRewardV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starChallengeChooseTaskItemWithRewardV2Request(\Oceanengine\Models\StarChallengeChooseTaskItemWithRewardV2Request $starChallengeChooseTaskItemWithRewardV2Request): self
    {
        $this->starChallengeChooseTaskItemWithRewardV2Request = $starChallengeChooseTaskItemWithRewardV2Request;
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
     * 为客户提供API进行选稿发奖
     */
    public function execute(): \Oceanengine\Models\StarChallengeChooseTaskItemWithRewardV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starChallengeChooseTaskItemWithRewardV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/choose_task_item_with_reward/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeChooseTaskItemWithRewardV2Response::class);

        return $result['model'];
    }
}
