<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_push_items_to_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投稿作品推送AD
 */
class ApiOpenApi2StarChallengePushItemsToAdPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarChallengePushItemsToAdV2Request $starChallengePushItemsToAdV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengePushItemsToAdV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starChallengePushItemsToAdV2Request(\Oceanengine\Models\StarChallengePushItemsToAdV2Request $starChallengePushItemsToAdV2Request): self
    {
        $this->starChallengePushItemsToAdV2Request = $starChallengePushItemsToAdV2Request;
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
     * 投稿作品推送AD
     */
    public function execute(): \Oceanengine\Models\StarChallengePushItemsToAdV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starChallengePushItemsToAdV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/push_items_to_ad/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengePushItemsToAdV2Response::class);

        return $result['model'];
    }
}
