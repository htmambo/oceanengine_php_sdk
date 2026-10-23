<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_budget_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 资金共享-设置子钱包预算信息
 */
class ApiOpenApiV30SharedWalletBudgetSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\SharedWalletBudgetSubmitV30Request $sharedWalletBudgetSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletBudgetSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function sharedWalletBudgetSubmitV30Request(\Oceanengine\Models\SharedWalletBudgetSubmitV30Request $sharedWalletBudgetSubmitV30Request): self
    {
        $this->sharedWalletBudgetSubmitV30Request = $sharedWalletBudgetSubmitV30Request;
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
     * 资金共享-设置子钱包预算信息
     */
    public function execute(): \Oceanengine\Models\SharedWalletBudgetSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->sharedWalletBudgetSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/budget/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletBudgetSubmitV30Response::class);

        return $result['model'];
    }
}
