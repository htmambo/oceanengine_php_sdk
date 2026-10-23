<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_advertiser_update_sale_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改广告主所属销售信息
 */
class ApiOpenApi2AgentAdvAdvertiserUpdateSalePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AgentAdvAdvertiserUpdateSaleV2Request $agentAdvAdvertiserUpdateSaleV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvAdvertiserUpdateSaleV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentAdvAdvertiserUpdateSaleV2Request(\Oceanengine\Models\AgentAdvAdvertiserUpdateSaleV2Request $agentAdvAdvertiserUpdateSaleV2Request): self
    {
        $this->agentAdvAdvertiserUpdateSaleV2Request = $agentAdvAdvertiserUpdateSaleV2Request;
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
     * 修改广告主所属销售信息
     */
    public function execute(): \Oceanengine\Models\AgentAdvAdvertiserUpdateSaleV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->agentAdvAdvertiserUpdateSaleV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/adv/advertiser/update_sale/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvAdvertiserUpdateSaleV2Response::class);

        return $result['model'];
    }
}
