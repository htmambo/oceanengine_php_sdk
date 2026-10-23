<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_sub_wallet_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 传入钱包id、钱包名称、大钱包id、共享范围等信息，创建小钱包
 */
class ApiOpenApiV30SharedWalletSubWalletCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\SharedWalletSubWalletCreateV30Request $sharedWalletSubWalletCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletSubWalletCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function sharedWalletSubWalletCreateV30Request(\Oceanengine\Models\SharedWalletSubWalletCreateV30Request $sharedWalletSubWalletCreateV30Request): self
    {
        $this->sharedWalletSubWalletCreateV30Request = $sharedWalletSubWalletCreateV30Request;
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
     * 传入钱包id、钱包名称、大钱包id、共享范围等信息，创建小钱包
     */
    public function execute(): \Oceanengine\Models\SharedWalletSubWalletCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->sharedWalletSubWalletCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/sub_wallet/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletSubWalletCreateV30Response::class);

        return $result['model'];
    }
}
