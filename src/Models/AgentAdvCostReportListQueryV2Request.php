<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvCostReportListQueryV2Request implements \JsonSerializable
{
    /**
     * 代理商ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2CostAggType
     */
    protected ?string $costAggType = null;

    /**
     * 结束时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天以前；开始时间与结束时间的跨度不能超过365天。
     * @var string
     */
    protected ?string $endDate = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2RequestFiltering
     */
    protected ?\Oceanengine\Models\AgentAdvCostReportListQueryV2RequestFiltering $filtering = null;

    /**
     * 分页游标，使用该字段时，不用传入排序字段，会自动按该字段升序排列，需要传入size，根据size返回数据。第一次传入空字符串，后续传入上一次返回的uniqueKey
     * @var string
     */
    protected ?string $lastUniqueKey = null;

    /**
     * 排序字段
     * @var string
     */
    protected ?string $orderField = null;

    /**
     * @var \Oceanengine\Models\AgentAdvCostReportListQueryV2OrderType
     */
    protected ?string $orderType = null;

    /**
     * 页数，默认1
     * @var int
     */
    protected ?int $page = null;

    /**
     * 单页条数，默认20
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 开始时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天以前（不允许包括今天）
     * @var string
     */
    protected ?string $startDate = null;

    /**
     * 代理商ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2CostAggType
     */
    public function getCostAggType(): ?string
    {
        return $this->costAggType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2CostAggType $costAggType
     * @return self
     */
    public function setCostAggType(?string $costAggType): self
    {
        $this->costAggType = $costAggType;
        return $this;
    }

    /**
     * 结束时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天以前；开始时间与结束时间的跨度不能超过365天。
     * @return string
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * 结束时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天以前；开始时间与结束时间的跨度不能超过365天。
     * @param string $endDate
     * @return self
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2RequestFiltering
     */
    public function getFiltering(): ?\Oceanengine\Models\AgentAdvCostReportListQueryV2RequestFiltering
    {
        return $this->filtering;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2RequestFiltering $filtering
     * @return self
     */
    public function setFiltering(?\Oceanengine\Models\AgentAdvCostReportListQueryV2RequestFiltering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 分页游标，使用该字段时，不用传入排序字段，会自动按该字段升序排列，需要传入size，根据size返回数据。第一次传入空字符串，后续传入上一次返回的uniqueKey
     * @return string
     */
    public function getLastUniqueKey(): ?string
    {
        return $this->lastUniqueKey;
    }

    /**
     * 分页游标，使用该字段时，不用传入排序字段，会自动按该字段升序排列，需要传入size，根据size返回数据。第一次传入空字符串，后续传入上一次返回的uniqueKey
     * @param string $lastUniqueKey
     * @return self
     */
    public function setLastUniqueKey(?string $lastUniqueKey): self
    {
        $this->lastUniqueKey = $lastUniqueKey;
        return $this;
    }

    /**
     * 排序字段
     * @return string
     */
    public function getOrderField(): ?string
    {
        return $this->orderField;
    }

    /**
     * 排序字段
     * @param string $orderField
     * @return self
     */
    public function setOrderField(?string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvCostReportListQueryV2OrderType
     */
    public function getOrderType(): ?string
    {
        return $this->orderType;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvCostReportListQueryV2OrderType $orderType
     * @return self
     */
    public function setOrderType(?string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 页数，默认1
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 页数，默认1
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 单页条数，默认20
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 单页条数，默认20
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 开始时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天以前（不允许包括今天）
     * @return string
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * 开始时间。格式：YYYY-MM-DD。闭区间,可选日期范围是今天以前（不允许包括今天）
     * @param string $startDate
     * @return self
     */
    public function setStartDate(?string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->costAggType !== null) {
            $result['cost_agg_type'] = $this->costAggType;
        }
        if ($this->endDate !== null) {
            $result['end_date'] = $this->endDate;
        }
        if ($this->filtering !== null) {
            $result['filtering'] = $this->filtering;
        }
        if ($this->lastUniqueKey !== null) {
            $result['last_unique_key'] = $this->lastUniqueKey;
        }
        if ($this->orderField !== null) {
            $result['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $result['order_type'] = $this->orderType;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->startDate !== null) {
            $result['start_date'] = $this->startDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['cost_agg_type'] ?? null) !== null) {
            $obj->costAggType = (string) $v;
        }
        if (($v = $data['end_date'] ?? null) !== null) {
            $obj->endDate = (string) $v;
        }
        if (($v = $data['filtering'] ?? null) !== null && is_array($v)) {
            $obj->filtering = \Oceanengine\Models\AgentAdvCostReportListQueryV2RequestFiltering::fromArray($v);
        }
        if (($v = $data['last_unique_key'] ?? null) !== null) {
            $obj->lastUniqueKey = (string) $v;
        }
        if (($v = $data['order_field'] ?? null) !== null) {
            $obj->orderField = (string) $v;
        }
        if (($v = $data['order_type'] ?? null) !== null) {
            $obj->orderType = (string) $v;
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['start_date'] ?? null) !== null) {
            $obj->startDate = (string) $v;
        }
        return $obj;
    }
}
