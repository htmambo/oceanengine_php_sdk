<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ad_update_delivery_info_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 编辑投放信息
 */
class ApiOpenApiV30BrandAdUpdateDeliveryInfoPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandAdUpdateDeliveryInfoV30Request $brandAdUpdateDeliveryInfoV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandAdUpdateDeliveryInfoV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandAdUpdateDeliveryInfoV30Request(\Oceanengine\Models\BrandAdUpdateDeliveryInfoV30Request $brandAdUpdateDeliveryInfoV30Request): self
    {
        $this->brandAdUpdateDeliveryInfoV30Request = $brandAdUpdateDeliveryInfoV30Request;
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
     * 编辑投放信息
     */
    public function execute(): \Oceanengine\Models\BrandAdUpdateDeliveryInfoV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandAdUpdateDeliveryInfoV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/ad/update_delivery_info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandAdUpdateDeliveryInfoV30Response::class);

        return $result['model'];
    }
}
