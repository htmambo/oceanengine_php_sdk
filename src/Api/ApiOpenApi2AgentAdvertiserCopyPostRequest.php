<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_copy_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告主账户复制接口
 */
class ApiOpenApi2AgentAdvertiserCopyPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AgentAdvertiserCopyV2Request $agentAdvertiserCopyV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvertiserCopyV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentAdvertiserCopyV2Request(\Oceanengine\Models\AgentAdvertiserCopyV2Request $agentAdvertiserCopyV2Request): self
    {
        $this->agentAdvertiserCopyV2Request = $agentAdvertiserCopyV2Request;
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
     * 广告主账户复制接口
     */
    public function execute(): \Oceanengine\Models\AgentAdvertiserCopyV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->agentAdvertiserCopyV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/advertiser/copy/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvertiserCopyV2Response::class);

        return $result['model'];
    }
}
