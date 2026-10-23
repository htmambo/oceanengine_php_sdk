<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_get_episode_limit_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取短剧可剪辑集数配置
 */
class ApiOpenApi2StarDemandGetEpisodeLimitGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $albumId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandGetEpisodeLimitV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    public function albumId(int $albumId): self
    {
        $this->albumId = $albumId;
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
     * 获取短剧可剪辑集数配置
     */
    public function execute(): \Oceanengine\Models\StarDemandGetEpisodeLimitV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->albumId === null) {
            throw new \InvalidArgumentException('albumId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['album_id'] = $this->albumId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/get_episode_limit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandGetEpisodeLimitV2Response::class);

        return $result['model'];
    }
}
