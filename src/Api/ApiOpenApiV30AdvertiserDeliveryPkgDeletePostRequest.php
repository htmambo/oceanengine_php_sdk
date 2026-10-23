<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_pkg_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持删除审核拒绝的投放资质（推广产品）
 */
class ApiOpenApiV30AdvertiserDeliveryPkgDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdvertiserDeliveryPkgDeleteV30Request $advertiserDeliveryPkgDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserDeliveryPkgDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserDeliveryPkgDeleteV30Request(\Oceanengine\Models\AdvertiserDeliveryPkgDeleteV30Request $advertiserDeliveryPkgDeleteV30Request): self
    {
        $this->advertiserDeliveryPkgDeleteV30Request = $advertiserDeliveryPkgDeleteV30Request;
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
     * 支持删除审核拒绝的投放资质（推广产品）
     */
    public function execute(): \Oceanengine\Models\AdvertiserDeliveryPkgDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->advertiserDeliveryPkgDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/advertiser/delivery_pkg/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserDeliveryPkgDeleteV30Response::class);

        return $result['model'];
    }
}
