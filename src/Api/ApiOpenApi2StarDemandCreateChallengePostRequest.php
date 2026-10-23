<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_create_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投稿任务创建
 */
class ApiOpenApi2StarDemandCreateChallengePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarDemandCreateChallengeV2Request $starDemandCreateChallengeV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandCreateChallengeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starDemandCreateChallengeV2Request(\Oceanengine\Models\StarDemandCreateChallengeV2Request $starDemandCreateChallengeV2Request): self
    {
        $this->starDemandCreateChallengeV2Request = $starDemandCreateChallengeV2Request;
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
     * 投稿任务创建
     */
    public function execute(): \Oceanengine\Models\StarDemandCreateChallengeV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starDemandCreateChallengeV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/create_challenge/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandCreateChallengeV2Response::class);

        return $result['model'];
    }
}
