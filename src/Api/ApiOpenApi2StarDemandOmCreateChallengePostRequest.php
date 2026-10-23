<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_create_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 小程序投稿任务创建
 */
class ApiOpenApi2StarDemandOmCreateChallengePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarDemandOmCreateChallengeV2Request $starDemandOmCreateChallengeV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandOmCreateChallengeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starDemandOmCreateChallengeV2Request(\Oceanengine\Models\StarDemandOmCreateChallengeV2Request $starDemandOmCreateChallengeV2Request): self
    {
        $this->starDemandOmCreateChallengeV2Request = $starDemandOmCreateChallengeV2Request;
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
     * 小程序投稿任务创建
     */
    public function execute(): \Oceanengine\Models\StarDemandOmCreateChallengeV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starDemandOmCreateChallengeV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/om_create_challenge/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandOmCreateChallengeV2Response::class);

        return $result['model'];
    }
}
