<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_info_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告主账户信息查询，包括：基础信息、自运营报备标签、账户绑定时间、账户联系人、账户负责人和协作者等
 */
class ApiOpenApi2AgentAdvertiserInfoQueryGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 广告主账户id，最多50个 */
    private ?array $accountIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvertiserInfoQueryV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主账户id，最多50个
     */
    public function accountIds(array $accountIds): self
    {
        $this->accountIds = $accountIds;
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
     * 广告主账户信息查询，包括：基础信息、自运营报备标签、账户绑定时间、账户联系人、账户负责人和协作者等
     */
    public function execute(): \Oceanengine\Models\AgentAdvertiserInfoQueryV2Response
    {
        if ($this->accountIds === null) {
            throw new \InvalidArgumentException('accountIds is required and must be specified');
        }
        if (count($this->accountIds) < 1) {
            throw new \InvalidArgumentException('accountIds must have at least 1 elements');
        }
        if (count($this->accountIds) > 50) {
            throw new \InvalidArgumentException('accountIds must have less than 50 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_ids'] = $this->accountIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/advertiser_info/query/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvertiserInfoQueryV2Response::class);

        return $result['model'];
    }
}
