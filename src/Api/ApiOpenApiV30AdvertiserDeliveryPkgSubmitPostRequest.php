<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_pkg_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于提交以推广产品形式整组提交的投放资质，该接口可以同时用于新增和编辑。
 * 针对审核不通过的推广产品资质支持编辑提交
 */
class ApiOpenApiV30AdvertiserDeliveryPkgSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30Request $advertiserDeliveryPkgSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserDeliveryPkgSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserDeliveryPkgSubmitV30Request(\Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30Request $advertiserDeliveryPkgSubmitV30Request): self
    {
        $this->advertiserDeliveryPkgSubmitV30Request = $advertiserDeliveryPkgSubmitV30Request;
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
     * 用于提交以推广产品形式整组提交的投放资质，该接口可以同时用于新增和编辑。
     */
    public function execute(): \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->advertiserDeliveryPkgSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/advertiser/delivery_pkg/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30Response::class);

        return $result['model'];
    }
}
