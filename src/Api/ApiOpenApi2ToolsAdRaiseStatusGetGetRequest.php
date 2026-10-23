<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ad_raise_status_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsAdRaiseStatusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $adIds = null;
    private ?int $advertiserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAdRaiseStatusGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function adIds(array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ToolsAdRaiseStatusGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->adIds !== null) {
            $queryParams['ad_ids'] = $this->adIds;
        }
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/ad_raise_status/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAdRaiseStatusGetV2Response::class);

        return $result['model'];
    }
}
