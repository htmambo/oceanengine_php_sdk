<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_expand_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 小程序投稿任务更新达人范围
 */
class ApiOpenApi2StarDemandOmExpandChallengePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarDemandOmExpandChallengeV2Request $starDemandOmExpandChallengeV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandOmExpandChallengeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starDemandOmExpandChallengeV2Request(\Oceanengine\Models\StarDemandOmExpandChallengeV2Request $starDemandOmExpandChallengeV2Request): self
    {
        $this->starDemandOmExpandChallengeV2Request = $starDemandOmExpandChallengeV2Request;
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
     * 小程序投稿任务更新达人范围
     */
    public function execute(): \Oceanengine\Models\StarDemandOmExpandChallengeV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starDemandOmExpandChallengeV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/om_expand_challenge/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandOmExpandChallengeV2Response::class);

        return $result['model'];
    }
}
