<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建广告
 */
class ApiOpenApiV30LocalPromotionCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalPromotionCreateV30Request $localPromotionCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalPromotionCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localPromotionCreateV30Request(\Oceanengine\Models\LocalPromotionCreateV30Request $localPromotionCreateV30Request): self
    {
        $this->localPromotionCreateV30Request = $localPromotionCreateV30Request;
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
     * 创建广告
     */
    public function execute(): \Oceanengine\Models\LocalPromotionCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localPromotionCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/promotion/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalPromotionCreateV30Response::class);

        return $result['model'];
    }
}
