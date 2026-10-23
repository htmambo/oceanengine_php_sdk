<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_cost_report_list_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商消耗报表查询
 */
class ApiOpenApi2AgentAdvCostReportListQueryPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AgentAdvCostReportListQueryV2Request $agentAdvCostReportListQueryV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvCostReportListQueryV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentAdvCostReportListQueryV2Request(\Oceanengine\Models\AgentAdvCostReportListQueryV2Request $agentAdvCostReportListQueryV2Request): self
    {
        $this->agentAdvCostReportListQueryV2Request = $agentAdvCostReportListQueryV2Request;
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
     * 代理商消耗报表查询
     */
    public function execute(): \Oceanengine\Models\AgentAdvCostReportListQueryV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->agentAdvCostReportListQueryV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/adv/cost_report/list/query/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvCostReportListQueryV2Response::class);

        return $result['model'];
    }
}
