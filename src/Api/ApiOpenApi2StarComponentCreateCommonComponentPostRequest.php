<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_create_common_component_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 作为星图通用组件创建api提供出去
 */
class ApiOpenApi2StarComponentCreateCommonComponentPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarComponentCreateCommonComponentV2Request $starComponentCreateCommonComponentV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarComponentCreateCommonComponentV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starComponentCreateCommonComponentV2Request(\Oceanengine\Models\StarComponentCreateCommonComponentV2Request $starComponentCreateCommonComponentV2Request): self
    {
        $this->starComponentCreateCommonComponentV2Request = $starComponentCreateCommonComponentV2Request;
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
     * 作为星图通用组件创建api提供出去
     */
    public function execute(): \Oceanengine\Models\StarComponentCreateCommonComponentV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starComponentCreateCommonComponentV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/component/create_common_component/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarComponentCreateCommonComponentV2Response::class);

        return $result['model'];
    }
}
