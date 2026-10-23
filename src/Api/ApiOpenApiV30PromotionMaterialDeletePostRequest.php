<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_material_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除一个promotion下的多个素材
 */
class ApiOpenApiV30PromotionMaterialDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PromotionMaterialDeleteV30Request $promotionMaterialDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionMaterialDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionMaterialDeleteV30Request(\Oceanengine\Models\PromotionMaterialDeleteV30Request $promotionMaterialDeleteV30Request): self
    {
        $this->promotionMaterialDeleteV30Request = $promotionMaterialDeleteV30Request;
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
     * 删除一个promotion下的多个素材
     */
    public function execute(): \Oceanengine\Models\PromotionMaterialDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->promotionMaterialDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/material/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionMaterialDeleteV30Response::class);

        return $result['model'];
    }
}
