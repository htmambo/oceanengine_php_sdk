<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_temporary_punish_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 临时惩罚广告主
 */
class ApiOpenApi2AgentAdvTemporaryPunishPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AgentAdvTemporaryPunishV2Request $agentAdvTemporaryPunishV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvTemporaryPunishV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentAdvTemporaryPunishV2Request(\Oceanengine\Models\AgentAdvTemporaryPunishV2Request $agentAdvTemporaryPunishV2Request): self
    {
        $this->agentAdvTemporaryPunishV2Request = $agentAdvTemporaryPunishV2Request;
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
     * 临时惩罚广告主
     */
    public function execute(): \Oceanengine\Models\AgentAdvTemporaryPunishV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->agentAdvTemporaryPunishV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/adv/temporary/punish/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvTemporaryPunishV2Response::class);

        return $result['model'];
    }
}
