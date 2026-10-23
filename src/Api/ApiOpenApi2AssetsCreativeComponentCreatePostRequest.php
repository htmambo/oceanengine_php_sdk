<?php

/**
 * 本文件由 go2php 生成，源: api_assets_creative_component_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2AssetsCreativeComponentCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AssetsCreativeComponentCreateV2Request $assetsCreativeComponentCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AssetsCreativeComponentCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function assetsCreativeComponentCreateV2Request(\Oceanengine\Models\AssetsCreativeComponentCreateV2Request $assetsCreativeComponentCreateV2Request): self
    {
        $this->assetsCreativeComponentCreateV2Request = $assetsCreativeComponentCreateV2Request;
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
    public function execute(): \Oceanengine\Models\AssetsCreativeComponentCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->assetsCreativeComponentCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/assets/creative_component/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AssetsCreativeComponentCreateV2Response::class);

        return $result['model'];
    }
}
