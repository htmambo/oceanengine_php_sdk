<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_perennially_punish_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 永久惩罚广告主
 */
class ApiOpenApi2AgentAdvPerenniallyPunishPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AgentAdvPerenniallyPunishV2Request $agentAdvPerenniallyPunishV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvPerenniallyPunishV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentAdvPerenniallyPunishV2Request(\Oceanengine\Models\AgentAdvPerenniallyPunishV2Request $agentAdvPerenniallyPunishV2Request): self
    {
        $this->agentAdvPerenniallyPunishV2Request = $agentAdvPerenniallyPunishV2Request;
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
     * 永久惩罚广告主
     */
    public function execute(): \Oceanengine\Models\AgentAdvPerenniallyPunishV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->agentAdvPerenniallyPunishV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/adv/perennially/punish/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvPerenniallyPunishV2Response::class);

        return $result['model'];
    }
}
