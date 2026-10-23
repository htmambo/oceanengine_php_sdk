<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_watch_rule_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 资金共享-设置子钱包盯盘预警规则
 */
class ApiOpenApiV30SharedWalletWatchRuleSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\SharedWalletWatchRuleSubmitV30Request $sharedWalletWatchRuleSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletWatchRuleSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function sharedWalletWatchRuleSubmitV30Request(\Oceanengine\Models\SharedWalletWatchRuleSubmitV30Request $sharedWalletWatchRuleSubmitV30Request): self
    {
        $this->sharedWalletWatchRuleSubmitV30Request = $sharedWalletWatchRuleSubmitV30Request;
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
     * 资金共享-设置子钱包盯盘预警规则
     */
    public function execute(): \Oceanengine\Models\SharedWalletWatchRuleSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->sharedWalletWatchRuleSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/watch_rule/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletWatchRuleSubmitV30Response::class);

        return $result['model'];
    }
}
