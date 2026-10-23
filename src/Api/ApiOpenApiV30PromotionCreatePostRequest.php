<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创编2.0-创建单元
 */
class ApiOpenApiV30PromotionCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PromotionCreateV30Request $promotionCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionCreateV30Request(\Oceanengine\Models\PromotionCreateV30Request $promotionCreateV30Request): self
    {
        $this->promotionCreateV30Request = $promotionCreateV30Request;
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
     * 创编2.0-创建单元
     */
    public function execute(): \Oceanengine\Models\PromotionCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->promotionCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionCreateV30Response::class);

        return $result['model'];
    }
}
