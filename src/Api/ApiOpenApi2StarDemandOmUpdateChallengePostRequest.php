<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_update_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 小程序投稿任务更新
 */
class ApiOpenApi2StarDemandOmUpdateChallengePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarDemandOmUpdateChallengeV2Request $starDemandOmUpdateChallengeV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandOmUpdateChallengeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starDemandOmUpdateChallengeV2Request(\Oceanengine\Models\StarDemandOmUpdateChallengeV2Request $starDemandOmUpdateChallengeV2Request): self
    {
        $this->starDemandOmUpdateChallengeV2Request = $starDemandOmUpdateChallengeV2Request;
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
     * 小程序投稿任务更新
     */
    public function execute(): \Oceanengine\Models\StarDemandOmUpdateChallengeV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starDemandOmUpdateChallengeV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/om_update_challenge/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandOmUpdateChallengeV2Response::class);

        return $result['model'];
    }
}
