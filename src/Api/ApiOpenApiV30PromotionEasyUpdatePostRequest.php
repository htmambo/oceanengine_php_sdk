<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_easy_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新简单投广告
 */
class ApiOpenApiV30PromotionEasyUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PromotionEasyUpdateV30Request $promotionEasyUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionEasyUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionEasyUpdateV30Request(\Oceanengine\Models\PromotionEasyUpdateV30Request $promotionEasyUpdateV30Request): self
    {
        $this->promotionEasyUpdateV30Request = $promotionEasyUpdateV30Request;
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
     * 更新简单投广告
     */
    public function execute(): \Oceanengine\Models\PromotionEasyUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->promotionEasyUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion_easy/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionEasyUpdateV30Response::class);

        return $result['model'];
    }
}
