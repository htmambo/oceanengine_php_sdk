<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_qualification_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持删除审核拒绝的投放资质（单资质）
 */
class ApiOpenApiV30AdvertiserDeliveryQualificationDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdvertiserDeliveryQualificationDeleteV30Request $advertiserDeliveryQualificationDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserDeliveryQualificationDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserDeliveryQualificationDeleteV30Request(\Oceanengine\Models\AdvertiserDeliveryQualificationDeleteV30Request $advertiserDeliveryQualificationDeleteV30Request): self
    {
        $this->advertiserDeliveryQualificationDeleteV30Request = $advertiserDeliveryQualificationDeleteV30Request;
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
     * 支持删除审核拒绝的投放资质（单资质）
     */
    public function execute(): \Oceanengine\Models\AdvertiserDeliveryQualificationDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->advertiserDeliveryQualificationDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/advertiser/delivery_qualification/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserDeliveryQualificationDeleteV30Response::class);

        return $result['model'];
    }
}
