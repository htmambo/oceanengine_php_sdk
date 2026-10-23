<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_unassign_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告主账户解绑负责人、解绑协作者
 */
class ApiOpenApi2AgentAdvertiserUnassignPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AgentAdvertiserUnassignV2Request $agentAdvertiserUnassignV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvertiserUnassignV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentAdvertiserUnassignV2Request(\Oceanengine\Models\AgentAdvertiserUnassignV2Request $agentAdvertiserUnassignV2Request): self
    {
        $this->agentAdvertiserUnassignV2Request = $agentAdvertiserUnassignV2Request;
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
     * 广告主账户解绑负责人、解绑协作者
     */
    public function execute(): \Oceanengine\Models\AgentAdvertiserUnassignV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->agentAdvertiserUnassignV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/advertiser/unassign/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvertiserUnassignV2Response::class);

        return $result['model'];
    }
}
