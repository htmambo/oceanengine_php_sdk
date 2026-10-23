<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_expand_range_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 增加达人范围
 */
class ApiOpenApi2StarChallengeExpandRangePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarChallengeExpandRangeV2Request $starChallengeExpandRangeV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeExpandRangeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starChallengeExpandRangeV2Request(\Oceanengine\Models\StarChallengeExpandRangeV2Request $starChallengeExpandRangeV2Request): self
    {
        $this->starChallengeExpandRangeV2Request = $starChallengeExpandRangeV2Request;
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
     * 增加达人范围
     */
    public function execute(): \Oceanengine\Models\StarChallengeExpandRangeV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starChallengeExpandRangeV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/expand_range/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeExpandRangeV2Response::class);

        return $result['model'];
    }
}
