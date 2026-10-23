<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_perennially_punish_history_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询某adv历史被代理商操作永久封停的记录，仅包含方舟新永久封停渠道封停的记录类型
 */
class ApiOpenApi2AgentAdvPerenniallyPunishHistoryQueryGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $agentId = null;
    /** @var int[] 广告主id */
    private ?array $advertiserIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvPerenniallyPunishHistoryQueryV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 广告主id
     */
    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
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
     * 查询某adv历史被代理商操作永久封停的记录，仅包含方舟新永久封停渠道封停的记录类型
     */
    public function execute(): \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        if (count($this->advertiserIds) < 1) {
            throw new \InvalidArgumentException('advertiserIds must have at least 1 elements');
        }
        if (count($this->advertiserIds) > 100) {
            throw new \InvalidArgumentException('advertiserIds must have less than 100 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/adv/perennially/punish_history/query/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2Response::class);

        return $result['model'];
    }
}
