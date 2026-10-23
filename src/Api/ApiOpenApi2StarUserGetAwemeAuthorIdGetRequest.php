<?php

/**
 * 本文件由 go2php 生成，源: api_star_user_get_aweme_author_id_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据star_id反查抖音aweme_author_id
 */
class ApiOpenApi2StarUserGetAwemeAuthorIdGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $authorStarId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarUserGetAwemeAuthorIdV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    public function authorStarId(int $authorStarId): self
    {
        $this->authorStarId = $authorStarId;
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
     * 根据star_id反查抖音aweme_author_id
     */
    public function execute(): \Oceanengine\Models\StarUserGetAwemeAuthorIdV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->authorStarId === null) {
            throw new \InvalidArgumentException('authorStarId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['author_star_id'] = $this->authorStarId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/user/get_aweme_author_id/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarUserGetAwemeAuthorIdV2Response::class);

        return $result['model'];
    }
}
