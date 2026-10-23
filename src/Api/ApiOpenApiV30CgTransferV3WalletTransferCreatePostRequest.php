<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_v3_wallet_transfer_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 发起转账，支持钱包<->钱包之间m:n转账，但一次转账一个钱包id不能既是减款方，也是加款方
 */
class ApiOpenApiV30CgTransferV3WalletTransferCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CgTransferV3WalletTransferCreateV30Request $cgTransferV3WalletTransferCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferV3WalletTransferCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function cgTransferV3WalletTransferCreateV30Request(\Oceanengine\Models\CgTransferV3WalletTransferCreateV30Request $cgTransferV3WalletTransferCreateV30Request): self
    {
        $this->cgTransferV3WalletTransferCreateV30Request = $cgTransferV3WalletTransferCreateV30Request;
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
     * 发起转账，支持钱包<->钱包之间m:n转账，但一次转账一个钱包id不能既是减款方，也是加款方
     */
    public function execute(): \Oceanengine\Models\CgTransferV3WalletTransferCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->cgTransferV3WalletTransferCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/v3/wallet/transfer/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferV3WalletTransferCreateV30Response::class);

        return $result['model'];
    }
}
