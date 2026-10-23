<?php

/**
 * 本文件由 go2php 生成，源: api_local_life_advertiser_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本地开户接口
 */
class ApiOpenApiV30LocalLifeAdvertiserCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalLifeAdvertiserCreateV30Request $localLifeAdvertiserCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalLifeAdvertiserCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localLifeAdvertiserCreateV30Request(\Oceanengine\Models\LocalLifeAdvertiserCreateV30Request $localLifeAdvertiserCreateV30Request): self
    {
        $this->localLifeAdvertiserCreateV30Request = $localLifeAdvertiserCreateV30Request;
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
     * 本地开户接口
     */
    public function execute(): \Oceanengine\Models\LocalLifeAdvertiserCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localLifeAdvertiserCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/life/advertiser/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalLifeAdvertiserCreateV30Response::class);

        return $result['model'];
    }
}
