<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投稿任务取消
 */
class ApiOpenApi2StarChallengeCancelPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarChallengeCancelV2Request $starChallengeCancelV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeCancelV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starChallengeCancelV2Request(\Oceanengine\Models\StarChallengeCancelV2Request $starChallengeCancelV2Request): self
    {
        $this->starChallengeCancelV2Request = $starChallengeCancelV2Request;
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
     * 投稿任务取消
     */
    public function execute(): \Oceanengine\Models\StarChallengeCancelV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starChallengeCancelV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/cancel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeCancelV2Response::class);

        return $result['model'];
    }
}
