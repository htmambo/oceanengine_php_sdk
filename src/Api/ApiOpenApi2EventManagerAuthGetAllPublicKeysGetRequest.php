<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_auth_get_all_public_keys_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * # API Description
 */
class ApiOpenApi2EventManagerAuthGetAllPublicKeysGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerAuthGetAllPublicKeysV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
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
     * # API Description
     */
    public function execute(): \Oceanengine\Models\EventManagerAuthGetAllPublicKeysV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/event_manager/auth/get_all_public_keys/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerAuthGetAllPublicKeysV2Response::class);

        return $result['model'];
    }
}
