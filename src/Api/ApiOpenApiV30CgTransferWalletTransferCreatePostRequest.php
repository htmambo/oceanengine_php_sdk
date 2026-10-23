<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_wallet_transfer_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 发起转账，支持大钱包与小钱包互转，1:N批量转账
 */
class ApiOpenApiV30CgTransferWalletTransferCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CgTransferWalletTransferCreateV30Request $cgTransferWalletTransferCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferWalletTransferCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function cgTransferWalletTransferCreateV30Request(\Oceanengine\Models\CgTransferWalletTransferCreateV30Request $cgTransferWalletTransferCreateV30Request): self
    {
        $this->cgTransferWalletTransferCreateV30Request = $cgTransferWalletTransferCreateV30Request;
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
     * 发起转账，支持大钱包与小钱包互转，1:N批量转账
     */
    public function execute(): \Oceanengine\Models\CgTransferWalletTransferCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->cgTransferWalletTransferCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/wallet/transfer/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferWalletTransferCreateV30Response::class);

        return $result['model'];
    }
}
