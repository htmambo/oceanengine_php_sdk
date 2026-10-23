<?php

/**
 * 本文件由 go2php 生成，源: api_query_rebate_balance_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 结算-查询返点流水信息
 */
class ApiOpenApi2QueryRebateBalanceGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商ID */
    private ?int $agentId = null;
    /** @var \Oceanengine\Models\QueryRebateBalanceV2Filtering 过滤器 */
    private ?\Oceanengine\Models\QueryRebateBalanceV2Filtering $filtering = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QueryRebateBalanceV2ApiService $service)
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
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QueryRebateBalanceV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 结算-查询返点流水信息
     */
    public function execute(): \Oceanengine\Models\QueryRebateBalanceV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/query/rebate_balance/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QueryRebateBalanceV2Response::class);

        return $result['model'];
    }
}
