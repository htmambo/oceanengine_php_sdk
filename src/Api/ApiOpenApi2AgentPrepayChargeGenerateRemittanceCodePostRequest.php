<?php

/**
 * 本文件由 go2php 生成，源: api_agent_prepay_charge_generate_remittance_code_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商进行预付充值生成汇款码记录，并透传汇款码信息给用户
 */
class ApiOpenApi2AgentPrepayChargeGenerateRemittanceCodePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2Request $agentPrepayChargeGenerateRemittanceCodeV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentPrepayChargeGenerateRemittanceCodeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentPrepayChargeGenerateRemittanceCodeV2Request(\Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2Request $agentPrepayChargeGenerateRemittanceCodeV2Request): self
    {
        $this->agentPrepayChargeGenerateRemittanceCodeV2Request = $agentPrepayChargeGenerateRemittanceCodeV2Request;
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
     * 代理商进行预付充值生成汇款码记录，并透传汇款码信息给用户
     */
    public function execute(): \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->agentPrepayChargeGenerateRemittanceCodeV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/prepay_charge/generate_remittance_code/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2Response::class);

        return $result['model'];
    }
}
