<?php

/**
 * 本文件由 go2php 生成，源: api_query_statement_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商查询项目关联结算单信息
 */
class ApiOpenApi2QueryStatementGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商ID */
    private ?int $agentId = null;
    /** @var int[] 项目id列表，限制1000个 */
    private ?array $projectIdList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QueryStatementV2ApiService $service)
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
     * 项目id列表，限制1000个
     */
    public function projectIdList(array $projectIdList): self
    {
        $this->projectIdList = $projectIdList;
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
     * 代理商查询项目关联结算单信息
     */
    public function execute(): \Oceanengine\Models\QueryStatementV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->projectIdList === null) {
            throw new \InvalidArgumentException('projectIdList is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['project_id_list'] = $this->projectIdList;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/query/statement/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QueryStatementV2Response::class);

        return $result['model'];
    }
}
