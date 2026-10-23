<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_add_budget_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 追加预算
 */
class ApiOpenApi2StarChallengeAddBudgetPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarChallengeAddBudgetV2Request $starChallengeAddBudgetV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeAddBudgetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starChallengeAddBudgetV2Request(\Oceanengine\Models\StarChallengeAddBudgetV2Request $starChallengeAddBudgetV2Request): self
    {
        $this->starChallengeAddBudgetV2Request = $starChallengeAddBudgetV2Request;
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
     * 追加预算
     */
    public function execute(): \Oceanengine\Models\StarChallengeAddBudgetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starChallengeAddBudgetV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/add_budget/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeAddBudgetV2Response::class);

        return $result['model'];
    }
}
