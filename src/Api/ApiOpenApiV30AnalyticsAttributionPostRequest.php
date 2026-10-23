<?php

/**
 * 本文件由 go2php 生成，源: api_analytics_attribution_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 该接口主要承接广告主上传需要巨量引擎归因事件，当前仅支持biz_type=4，包含引流电商PA深转归因实时回传和引流电商点击时间回传。
 */
class ApiOpenApiV30AnalyticsAttributionPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AnalyticsAttributionV30Request $analyticsAttributionV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AnalyticsAttributionV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function analyticsAttributionV30Request(\Oceanengine\Models\AnalyticsAttributionV30Request $analyticsAttributionV30Request): self
    {
        $this->analyticsAttributionV30Request = $analyticsAttributionV30Request;
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
     * 该接口主要承接广告主上传需要巨量引擎归因事件，当前仅支持biz_type=4，包含引流电商PA深转归因实时回传和引流电商点击时间回传。
     */
    public function execute(): \Oceanengine\Models\AnalyticsAttributionV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->analyticsAttributionV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/analytics/attribution/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AnalyticsAttributionV30Response::class);

        return $result['model'];
    }
}
