<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_fund_transfer_seq_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2CustomerCenterFundTransferSeqCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CustomerCenterFundTransferSeqCreateV2Request $customerCenterFundTransferSeqCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CustomerCenterFundTransferSeqCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function customerCenterFundTransferSeqCreateV2Request(\Oceanengine\Models\CustomerCenterFundTransferSeqCreateV2Request $customerCenterFundTransferSeqCreateV2Request): self
    {
        $this->customerCenterFundTransferSeqCreateV2Request = $customerCenterFundTransferSeqCreateV2Request;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\CustomerCenterFundTransferSeqCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->customerCenterFundTransferSeqCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/customer_center/fund/transfer_seq/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CustomerCenterFundTransferSeqCreateV2Response::class);

        return $result['model'];
    }
}
