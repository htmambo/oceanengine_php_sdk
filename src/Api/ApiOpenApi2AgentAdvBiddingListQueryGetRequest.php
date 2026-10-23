<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_bidding_list_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商竞价投放数据
 */
class ApiOpenApi2AgentAdvBiddingListQueryGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $agentId = null;
    /** @var string 开始时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天及以前（允许包括今天）。 */
    private ?string $startDate = null;
    /** @var string 结束时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天及以前（允许包括今天）。 */
    private ?string $endDate = null;
    /** @var \Oceanengine\Models\AgentAdvBiddingListQueryV2Filtering 筛选条件。 */
    private ?\Oceanengine\Models\AgentAdvBiddingListQueryV2Filtering $filtering = null;
    /** @var int 游标。第一次查询不填或传0。后续查询使用出参的cursor字段。page * page_size &gt; 10000 请使用此字段和cursor_size字段 */
    private ?int $cursor = null;
    /** @var int 页面大小，即一页展示的数据数量。取值范围: 1-1000。 */
    private ?int $cursorSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvBiddingListQueryV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 开始时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天及以前（允许包括今天）。
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 结束时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天及以前（允许包括今天）。
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 筛选条件。
     */
    public function filtering(\Oceanengine\Models\AgentAdvBiddingListQueryV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 游标。第一次查询不填或传0。后续查询使用出参的cursor字段。page * page_size &gt; 10000 请使用此字段和cursor_size字段
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 页面大小，即一页展示的数据数量。取值范围: 1-1000。
     */
    public function cursorSize(int $cursorSize): self
    {
        $this->cursorSize = $cursorSize;
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
     * 代理商竞价投放数据
     */
    public function execute(): \Oceanengine\Models\AgentAdvBiddingListQueryV2Response
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
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->cursorSize !== null) {
            $queryParams['cursor_size'] = $this->cursorSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/adv/bidding/list/query/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvBiddingListQueryV2Response::class);

        return $result['model'];
    }
}
