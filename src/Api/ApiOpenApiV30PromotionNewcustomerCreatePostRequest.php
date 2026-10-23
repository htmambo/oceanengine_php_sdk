<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_newcustomer_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建简单投广告
 */
class ApiOpenApiV30PromotionNewcustomerCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PromotionNewcustomerCreateV30Request $promotionNewcustomerCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionNewcustomerCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionNewcustomerCreateV30Request(\Oceanengine\Models\PromotionNewcustomerCreateV30Request $promotionNewcustomerCreateV30Request): self
    {
        $this->promotionNewcustomerCreateV30Request = $promotionNewcustomerCreateV30Request;
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
     * 创建简单投广告
     */
    public function execute(): \Oceanengine\Models\PromotionNewcustomerCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->promotionNewcustomerCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion_newcustomer/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionNewcustomerCreateV30Response::class);

        return $result['model'];
    }
}
