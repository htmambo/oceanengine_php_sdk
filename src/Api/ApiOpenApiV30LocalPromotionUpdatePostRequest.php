<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告更新
 */
class ApiOpenApiV30LocalPromotionUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalPromotionUpdateV30Request $localPromotionUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalPromotionUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localPromotionUpdateV30Request(\Oceanengine\Models\LocalPromotionUpdateV30Request $localPromotionUpdateV30Request): self
    {
        $this->localPromotionUpdateV30Request = $localPromotionUpdateV30Request;
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
     * 广告更新
     */
    public function execute(): \Oceanengine\Models\LocalPromotionUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localPromotionUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/promotion/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalPromotionUpdateV30Response::class);

        return $result['model'];
    }
}
