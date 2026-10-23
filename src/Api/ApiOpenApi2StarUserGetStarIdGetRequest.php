<?php

/**
 * 本文件由 go2php 生成，源: api_star_user_get_star_id_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于抖音uid回查星图uid
 */
class ApiOpenApi2StarUserGetStarIdGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户id */
    private ?int $starId = null;
    /** @var int 达人抖音uid */
    private ?int $awemeAuthorId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarUserGetStarIdV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户id
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 达人抖音uid
     */
    public function awemeAuthorId(int $awemeAuthorId): self
    {
        $this->awemeAuthorId = $awemeAuthorId;
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
     * 用于抖音uid回查星图uid
     */
    public function execute(): \Oceanengine\Models\StarUserGetStarIdV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->awemeAuthorId === null) {
            throw new \InvalidArgumentException('awemeAuthorId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['aweme_author_id'] = $this->awemeAuthorId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/user/get_star_id/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarUserGetStarIdV2Response::class);

        return $result['model'];
    }
}
