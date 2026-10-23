<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改广告主信息，可更改内容包括账户名称、联系人、手机号码、固定电话、备注，除此之外其他内容不允许修改。
 */
class ApiOpenApi2AgentAdvertiserUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AgentAdvertiserUpdateV2Request $agentAdvertiserUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvertiserUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentAdvertiserUpdateV2Request(\Oceanengine\Models\AgentAdvertiserUpdateV2Request $agentAdvertiserUpdateV2Request): self
    {
        $this->agentAdvertiserUpdateV2Request = $agentAdvertiserUpdateV2Request;
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
     * 修改广告主信息，可更改内容包括账户名称、联系人、手机号码、固定电话、备注，除此之外其他内容不允许修改。
     */
    public function execute(): \Oceanengine\Models\AgentAdvertiserUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->agentAdvertiserUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/advertiser/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvertiserUpdateV2Response::class);

        return $result['model'];
    }
}
