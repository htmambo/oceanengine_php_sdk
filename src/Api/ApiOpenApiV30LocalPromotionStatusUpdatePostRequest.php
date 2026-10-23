<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量广告状态更新
 */
class ApiOpenApiV30LocalPromotionStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalPromotionStatusUpdateV30Request $localPromotionStatusUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalPromotionStatusUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localPromotionStatusUpdateV30Request(\Oceanengine\Models\LocalPromotionStatusUpdateV30Request $localPromotionStatusUpdateV30Request): self
    {
        $this->localPromotionStatusUpdateV30Request = $localPromotionStatusUpdateV30Request;
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
     * 批量广告状态更新
     */
    public function execute(): \Oceanengine\Models\LocalPromotionStatusUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localPromotionStatusUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/promotion/status/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalPromotionStatusUpdateV30Response::class);

        return $result['model'];
    }
}
