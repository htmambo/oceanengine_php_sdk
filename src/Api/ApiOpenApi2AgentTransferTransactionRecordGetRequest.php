<?php

/**
 * 本文件由 go2php 生成，源: api_agent_transfer_transaction_record_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商转账记录查询，相关功能与商务-转账记录-账户转账记录
 */
class ApiOpenApi2AgentTransferTransactionRecordGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $agentId = null;
    /** @var string 开始时间，格式 yyyy-MM-dd，最远可以查询3年内的数据 */
    private ?string $startDate = null;
    /** @var string 截止时间，格式 yyyy-MM-dd */
    private ?string $endDate = null;
    /** @var \Oceanengine\Models\AgentTransferTransactionRecordV2Filtering 过滤器 */
    private ?\Oceanengine\Models\AgentTransferTransactionRecordV2Filtering $filtering = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentTransferTransactionRecordV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 开始时间，格式 yyyy-MM-dd，最远可以查询3年内的数据
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 截止时间，格式 yyyy-MM-dd
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\AgentTransferTransactionRecordV2Filtering $filtering): self
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
     * 代理商转账记录查询，相关功能与商务-转账记录-账户转账记录
     */
    public function execute(): \Oceanengine\Models\AgentTransferTransactionRecordV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
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
        $url = '/open_api/2/agent/transfer/transaction_record/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentTransferTransactionRecordV2Response::class);

        return $result['model'];
    }
}
