<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_fund_transfer_seq_commit_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2CustomerCenterFundTransferSeqCommitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CustomerCenterFundTransferSeqCommitV2Request $customerCenterFundTransferSeqCommitV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CustomerCenterFundTransferSeqCommitV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function customerCenterFundTransferSeqCommitV2Request(\Oceanengine\Models\CustomerCenterFundTransferSeqCommitV2Request $customerCenterFundTransferSeqCommitV2Request): self
    {
        $this->customerCenterFundTransferSeqCommitV2Request = $customerCenterFundTransferSeqCommitV2Request;
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
    public function execute(): \Oceanengine\Models\CustomerCenterFundTransferSeqCommitV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->customerCenterFundTransferSeqCommitV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/customer_center/fund/transfer_seq/commit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CustomerCenterFundTransferSeqCommitV2Response::class);

        return $result['model'];
    }
}
