<?php

/**
 * 本文件由 go2php 生成，源: api_agent_charge_verify_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 校验能否充值接口，校验不通过接口会报错并返回原因；校验通过接口返回可用于充值的合同
 */
class ApiOpenApi2AgentChargeVerifyGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商ID */
    private ?int $agentId = null;
    /** @var string 充值类型 */
    private ?string $chargeType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentChargeVerifyV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商ID
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 充值类型
     */
    public function chargeType(string $chargeType): self
    {
        $this->chargeType = $chargeType;
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
     * 校验能否充值接口，校验不通过接口会报错并返回原因；校验通过接口返回可用于充值的合同
     */
    public function execute(): \Oceanengine\Models\AgentChargeVerifyV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->chargeType === null) {
            throw new \InvalidArgumentException('chargeType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['charge_type'] = $this->chargeType;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/charge/verify/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentChargeVerifyV2Response::class);

        return $result['model'];
    }
}
