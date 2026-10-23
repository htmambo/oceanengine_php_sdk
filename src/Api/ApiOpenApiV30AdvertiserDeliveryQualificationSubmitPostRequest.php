<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_qualification_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本接口用于广告主提交投放资质
 */
class ApiOpenApiV30AdvertiserDeliveryQualificationSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30Request $advertiserDeliveryQualificationSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserDeliveryQualificationSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserDeliveryQualificationSubmitV30Request(\Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30Request $advertiserDeliveryQualificationSubmitV30Request): self
    {
        $this->advertiserDeliveryQualificationSubmitV30Request = $advertiserDeliveryQualificationSubmitV30Request;
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
     * 本接口用于广告主提交投放资质
     */
    public function execute(): \Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->advertiserDeliveryQualificationSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/advertiser/delivery_qualification/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserDeliveryQualificationSubmitV30Response::class);

        return $result['model'];
    }
}
