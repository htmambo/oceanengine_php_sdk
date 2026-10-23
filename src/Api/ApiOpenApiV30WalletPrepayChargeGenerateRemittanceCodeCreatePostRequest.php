<?php

/**
 * 本文件由 go2php 生成，源: api_wallet_prepay_charge_generate_remittance_code_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 钱包充值并获取汇款码
 */
class ApiOpenApiV30WalletPrepayChargeGenerateRemittanceCodeCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Request $walletPrepayChargeGenerateRemittanceCodeCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(WalletPrepayChargeGenerateRemittanceCodeCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function walletPrepayChargeGenerateRemittanceCodeCreateV30Request(\Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Request $walletPrepayChargeGenerateRemittanceCodeCreateV30Request): self
    {
        $this->walletPrepayChargeGenerateRemittanceCodeCreateV30Request = $walletPrepayChargeGenerateRemittanceCodeCreateV30Request;
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
     * 钱包充值并获取汇款码
     */
    public function execute(): \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->walletPrepayChargeGenerateRemittanceCodeCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/wallet/prepay_charge/generate_remittance_code/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30Response::class);

        return $result['model'];
    }
}
