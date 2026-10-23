<?php

/**
 * 本文件由 go2php 生成，源: api_game_addiction_id_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询应用关键行为
 */
class ApiOpenApiV30GameAddictionIdGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $assetId = null;
    private ?string $userName = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(GameAddictionIdGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function assetId(int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    public function userName(string $userName): self
    {
        $this->userName = $userName;
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
     * 查询应用关键行为
     */
    public function execute(): \Oceanengine\Models\GameAddictionIdGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->assetId !== null) {
            $queryParams['asset_id'] = $this->assetId;
        }
        if ($this->userName !== null) {
            $queryParams['user_name'] = $this->userName;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/game_addiction_id/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\GameAddictionIdGetV30Response::class);

        return $result['model'];
    }
}
