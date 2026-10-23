<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_album_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过短剧alblumID查询短剧可投状态
 */
class ApiOpenApiV30DpaAlbumStatusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 短剧id */
    private ?string $albumId = null;
    private ?int $appId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaAlbumStatusGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 短剧id
     */
    public function albumId(string $albumId): self
    {
        $this->albumId = $albumId;
        return $this;
    }

    public function appId(int $appId): self
    {
        $this->appId = $appId;
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
     * 通过短剧alblumID查询短剧可投状态
     */
    public function execute(): \Oceanengine\Models\DpaAlbumStatusGetV30Response
    {
        if ($this->albumId === null) {
            throw new \InvalidArgumentException('albumId is required and must be specified');
        }
        if ($this->appId === null) {
            throw new \InvalidArgumentException('appId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['album_id'] = $this->albumId;
        $queryParams['app_id'] = $this->appId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/album_status/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaAlbumStatusGetV30Response::class);

        return $result['model'];
    }
}
