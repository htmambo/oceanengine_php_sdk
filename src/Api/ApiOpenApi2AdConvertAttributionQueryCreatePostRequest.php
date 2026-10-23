<?php

/**
 * 本文件由 go2php 生成，源: api_ad_convert_attribution_query_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 对实时归因接口进行鉴权
 */
class ApiOpenApi2AdConvertAttributionQueryCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdConvertAttributionQueryCreateV2Request $adConvertAttributionQueryCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdConvertAttributionQueryCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function adConvertAttributionQueryCreateV2Request(\Oceanengine\Models\AdConvertAttributionQueryCreateV2Request $adConvertAttributionQueryCreateV2Request): self
    {
        $this->adConvertAttributionQueryCreateV2Request = $adConvertAttributionQueryCreateV2Request;
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
     * 对实时归因接口进行鉴权
     */
    public function execute(): string
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->adConvertAttributionQueryCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/ad_convert/attribution_query/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $requestContext['responseType'] = 'binary';
        $result = $this->apiClient->call($requestContext, \Oceanengine\Api\BinaryResponse::class);

        return $result['model'];
    }
}
