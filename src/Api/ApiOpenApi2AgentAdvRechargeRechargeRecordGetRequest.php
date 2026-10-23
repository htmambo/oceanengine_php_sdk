<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_recharge_recharge_record_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商充值记录查询，相关功能与代理商平台的「商务-充值记录-账户充值记录」模块对齐。
 */
class ApiOpenApi2AgentAdvRechargeRechargeRecordGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 代理商id列表 */
    private ?array $agentIds = null;
    /** @var string 开始时间 */
    private ?string $startTime = null;
    /** @var string 结束时间 */
    private ?string $endTime = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 每页大小 */
    private ?int $pageSize = null;
    /** @var \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2Filtering 过滤器 */
    private ?\Oceanengine\Models\AgentAdvRechargeRechargeRecordV2Filtering $filtering = null;
    /** @var int 代理商公司id，不传入则默认使用当前userId在方舟登录的公司id，仅支持单个公司查询 */
    private ?int $agentCompanyId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvRechargeRechargeRecordV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商id列表
     */
    public function agentIds(array $agentIds): self
    {
        $this->agentIds = $agentIds;
        return $this;
    }

    /**
     * 开始时间
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 结束时间
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
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
     * 每页大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\AgentAdvRechargeRechargeRecordV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 代理商公司id，不传入则默认使用当前userId在方舟登录的公司id，仅支持单个公司查询
     */
    public function agentCompanyId(int $agentCompanyId): self
    {
        $this->agentCompanyId = $agentCompanyId;
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
     * 代理商充值记录查询，相关功能与代理商平台的「商务-充值记录-账户充值记录」模块对齐。
     */
    public function execute(): \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2Response
    {
        if ($this->agentIds === null) {
            throw new \InvalidArgumentException('agentIds is required and must be specified');
        }
        if (count($this->agentIds) < 1) {
            throw new \InvalidArgumentException('agentIds must have at least 1 elements');
        }
        if (count($this->agentIds) > 20) {
            throw new \InvalidArgumentException('agentIds must have less than 20 elements');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_ids'] = $this->agentIds;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        if ($this->agentCompanyId !== null) {
            $queryParams['agent_company_id'] = $this->agentCompanyId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/adv/recharge/recharge_record/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2Response::class);

        return $result['model'];
    }
}
