<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_advertiser_copy_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 复制广告主账号
 */
class ApiOpenApi2CustomerCenterAdvertiserCopyPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CustomerCenterAdvertiserCopyV2Request $customerCenterAdvertiserCopyV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CustomerCenterAdvertiserCopyV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function customerCenterAdvertiserCopyV2Request(\Oceanengine\Models\CustomerCenterAdvertiserCopyV2Request $customerCenterAdvertiserCopyV2Request): self
    {
        $this->customerCenterAdvertiserCopyV2Request = $customerCenterAdvertiserCopyV2Request;
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
     * 复制广告主账号
     */
    public function execute(): \Oceanengine\Models\CustomerCenterAdvertiserCopyV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->customerCenterAdvertiserCopyV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/customer_center/advertiser/copy/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CustomerCenterAdvertiserCopyV2Response::class);

        return $result['model'];
    }
}
