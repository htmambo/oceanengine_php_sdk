<?php

/**
 * 本文件由 go2php 生成，源: api_prepay_charge_generate_remittance_code_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * SVIP客户提交对公充值获取汇款码
 */
class ApiOpenApiV30PrepayChargeGenerateRemittanceCodeCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30Request $prepayChargeGenerateRemittanceCodeCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PrepayChargeGenerateRemittanceCodeCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function prepayChargeGenerateRemittanceCodeCreateV30Request(\Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30Request $prepayChargeGenerateRemittanceCodeCreateV30Request): self
    {
        $this->prepayChargeGenerateRemittanceCodeCreateV30Request = $prepayChargeGenerateRemittanceCodeCreateV30Request;
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
     * SVIP客户提交对公充值获取汇款码
     */
    public function execute(): \Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->prepayChargeGenerateRemittanceCodeCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/prepay_charge/generate_remittance_code/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30Response::class);

        return $result['model'];
    }
}
