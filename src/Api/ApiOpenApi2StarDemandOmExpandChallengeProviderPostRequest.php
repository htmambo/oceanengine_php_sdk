<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_expand_challenge_provider_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改服务商参与范围
 */
class ApiOpenApi2StarDemandOmExpandChallengeProviderPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarDemandOmExpandChallengeProviderV2Request $starDemandOmExpandChallengeProviderV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandOmExpandChallengeProviderV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starDemandOmExpandChallengeProviderV2Request(\Oceanengine\Models\StarDemandOmExpandChallengeProviderV2Request $starDemandOmExpandChallengeProviderV2Request): self
    {
        $this->starDemandOmExpandChallengeProviderV2Request = $starDemandOmExpandChallengeProviderV2Request;
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
     * 修改服务商参与范围
     */
    public function execute(): \Oceanengine\Models\StarDemandOmExpandChallengeProviderV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starDemandOmExpandChallengeProviderV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/om_expand_challenge_provider/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandOmExpandChallengeProviderV2Response::class);

        return $result['model'];
    }
}
