<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新广告
 */
class ApiOpenApiV30PromotionUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PromotionUpdateV30Request $promotionUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionUpdateV30Request(\Oceanengine\Models\PromotionUpdateV30Request $promotionUpdateV30Request): self
    {
        $this->promotionUpdateV30Request = $promotionUpdateV30Request;
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
     * 更新广告
     */
    public function execute(): \Oceanengine\Models\PromotionUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->promotionUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionUpdateV30Response::class);

        return $result['model'];
    }
}
