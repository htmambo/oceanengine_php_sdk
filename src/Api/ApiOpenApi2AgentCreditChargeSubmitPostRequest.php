<?php

/**
 * 本文件由 go2php 生成，源: api_agent_credit_charge_submit_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 充值接口分为三步, 包含校验能否充值接口、提交授信充值接口、查询充值结果接口，本接口为第二步；提交之前需要校验能否充值，提交之后，通过轮训查询充值结果
 */
class ApiOpenApi2AgentCreditChargeSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AgentCreditChargeSubmitV2Request $agentCreditChargeSubmitV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentCreditChargeSubmitV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentCreditChargeSubmitV2Request(\Oceanengine\Models\AgentCreditChargeSubmitV2Request $agentCreditChargeSubmitV2Request): self
    {
        $this->agentCreditChargeSubmitV2Request = $agentCreditChargeSubmitV2Request;
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
     * 充值接口分为三步, 包含校验能否充值接口、提交授信充值接口、查询充值结果接口，本接口为第二步；提交之前需要校验能否充值，提交之后，通过轮训查询充值结果
     */
    public function execute(): \Oceanengine\Models\AgentCreditChargeSubmitV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->agentCreditChargeSubmitV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/credit_charge/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentCreditChargeSubmitV2Response::class);

        return $result['model'];
    }
}
