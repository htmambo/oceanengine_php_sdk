<?php

/**
 * 本文件由 go2php 生成，源: api_agent_query_risk_promotion_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询违规广告列表
 */
class ApiOpenApi2AgentQueryRiskPromotionListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商账户ID */
    private ?int $agentId = null;
    /** @var string 推送开始时间，比如：2024-03-01 */
    private ?string $startDate = null;
    /** @var string 推送结束时间，比如：2024-03-01（最长跨度31天） */
    private ?string $endDate = null;
    /** @var string 业务线，默认AD业务线传-1 */
    private ?string $businessType = null;
    /** @var int 页码游标值，初始从Long.MAX开始，后续传入返回的cursor值，不传值相当于page&#x3D;1，查询count条数据 */
    private ?int $cursor = null;
    /** @var int 页码游标值，最大支持500 */
    private ?int $count = null;
    /** @var \Oceanengine\Models\AgentQueryRiskPromotionListV2Filtering 过滤器 */
    private ?\Oceanengine\Models\AgentQueryRiskPromotionListV2Filtering $filtering = null;
    /** @var string[] 业务线；如果同时设置business_type和本字段，将以本字段为准 */
    private ?array $businessTypeList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentQueryRiskPromotionListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商账户ID
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 推送开始时间，比如：2024-03-01
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 推送结束时间，比如：2024-03-01（最长跨度31天）
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 业务线，默认AD业务线传-1
     */
    public function businessType(string $businessType): self
    {
        $this->businessType = $businessType;
        return $this;
    }

    /**
     * 页码游标值，初始从Long.MAX开始，后续传入返回的cursor值，不传值相当于page&#x3D;1，查询count条数据
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 页码游标值，最大支持500
     */
    public function count(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\AgentQueryRiskPromotionListV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 业务线；如果同时设置business_type和本字段，将以本字段为准
     */
    public function businessTypeList(array $businessTypeList): self
    {
        $this->businessTypeList = $businessTypeList;
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
     * 查询违规广告列表
     */
    public function execute(): \Oceanengine\Models\AgentQueryRiskPromotionListV2Response
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
        if ($this->businessType !== null) {
            $queryParams['business_type'] = $this->businessType;
        }
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->businessTypeList !== null) {
            $queryParams['business_type_list'] = $this->businessTypeList;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/query/risk_promotion_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentQueryRiskPromotionListV2Response::class);

        return $result['model'];
    }
}
