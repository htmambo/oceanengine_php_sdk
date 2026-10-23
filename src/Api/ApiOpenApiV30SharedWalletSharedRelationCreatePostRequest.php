<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_shared_relation_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 传入唯一操作id，关系变更类型，钱包id和账号id，进行共享钱包的绑定/解绑操作
 */
class ApiOpenApiV30SharedWalletSharedRelationCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\SharedWalletSharedRelationCreateV30Request $sharedWalletSharedRelationCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletSharedRelationCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function sharedWalletSharedRelationCreateV30Request(\Oceanengine\Models\SharedWalletSharedRelationCreateV30Request $sharedWalletSharedRelationCreateV30Request): self
    {
        $this->sharedWalletSharedRelationCreateV30Request = $sharedWalletSharedRelationCreateV30Request;
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
     * 传入唯一操作id，关系变更类型，钱包id和账号id，进行共享钱包的绑定/解绑操作
     */
    public function execute(): \Oceanengine\Models\SharedWalletSharedRelationCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->sharedWalletSharedRelationCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/shared_relation/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletSharedRelationCreateV30Response::class);

        return $result['model'];
    }
}
