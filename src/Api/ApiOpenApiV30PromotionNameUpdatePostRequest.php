<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_name_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * update promotion name
 */
class ApiOpenApiV30PromotionNameUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PromotionNameUpdateV30Request $promotionNameUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionNameUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionNameUpdateV30Request(\Oceanengine\Models\PromotionNameUpdateV30Request $promotionNameUpdateV30Request): self
    {
        $this->promotionNameUpdateV30Request = $promotionNameUpdateV30Request;
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
     * update promotion name
     */
    public function execute(): \Oceanengine\Models\PromotionNameUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->promotionNameUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion_name/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionNameUpdateV30Response::class);

        return $result['model'];
    }
}
