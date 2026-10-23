<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_watch_rule_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 资金共享-共享钱包盯盘规则查询(支持查询预警级别、阈值及级别对应的预警事件)
 */
class ApiOpenApiV30SharedWalletWatchRuleGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 鉴权账户(BP传bp_id，代理商传agent_id，广告主传adv_id) */
    private ?int $accountId = null;
    /** @var string 鉴权账户类型 */
    private ?string $accountType = null;
    /** @var int 子钱包ID */
    private ?int $subWalletId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletWatchRuleGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 鉴权账户(BP传bp_id，代理商传agent_id，广告主传adv_id)
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 鉴权账户类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 子钱包ID
     */
    public function subWalletId(int $subWalletId): self
    {
        $this->subWalletId = $subWalletId;
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
     * 资金共享-共享钱包盯盘规则查询(支持查询预警级别、阈值及级别对应的预警事件)
     */
    public function execute(): \Oceanengine\Models\SharedWalletWatchRuleGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->subWalletId === null) {
            throw new \InvalidArgumentException('subWalletId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['sub_wallet_id'] = $this->subWalletId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shared_wallet/watch_rule/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletWatchRuleGetV30Response::class);

        return $result['model'];
    }
}
