<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileRebateRebateDownloadCreateTaskV2Request implements \JsonSerializable
{
    /**
     * 代理商账户id
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 月/季度，可以传多个，以逗号分隔，如传入   1,2,3
     * @var string
     */
    protected ?string $monthQuarter = null;

    /**
     * 对于激励政策，必须填写policy_id
     * @var int
     */
    protected ?int $policyId = null;

    /**
     * @var \Oceanengine\Models\FileRebateRebateDownloadCreateTaskV2PricingCategory
     */
    protected ?string $pricingCategory = null;

    /**
     * 查询类型,目前包括 month_punish_details:下载违规明细月度 quarter_punish_details:下载违规明细季度  month_rebate_details:下载核算明细月度 quarter_rebate_details:下载核算明细季度 month_performance_details:下载业绩明细月度 quarter_performance_details:下载业绩明细季度, normal_calc_details:激励常规结算, special_calc_details: 激励特殊结算, material_details:激励素材考核
     * @var string
     */
    protected ?string $queryType = null;

    /**
     * 等待最新数据参数，默认等待
     * @var bool
     */
    protected ?bool $waitLatest = null;

    /**
     * 年
     * @var int
     */
    protected ?int $year = null;

    /**
     * 代理商账户id
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商账户id
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 月/季度，可以传多个，以逗号分隔，如传入   1,2,3
     * @return string
     */
    public function getMonthQuarter(): ?string
    {
        return $this->monthQuarter;
    }

    /**
     * 月/季度，可以传多个，以逗号分隔，如传入   1,2,3
     * @param string $monthQuarter
     * @return self
     */
    public function setMonthQuarter(?string $monthQuarter): self
    {
        $this->monthQuarter = $monthQuarter;
        return $this;
    }

    /**
     * 对于激励政策，必须填写policy_id
     * @return int
     */
    public function getPolicyId(): ?int
    {
        return $this->policyId;
    }

    /**
     * 对于激励政策，必须填写policy_id
     * @param int $policyId
     * @return self
     */
    public function setPolicyId(?int $policyId): self
    {
        $this->policyId = $policyId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileRebateRebateDownloadCreateTaskV2PricingCategory
     */
    public function getPricingCategory(): ?string
    {
        return $this->pricingCategory;
    }

    /**
     * @param \Oceanengine\Models\FileRebateRebateDownloadCreateTaskV2PricingCategory $pricingCategory
     * @return self
     */
    public function setPricingCategory(?string $pricingCategory): self
    {
        $this->pricingCategory = $pricingCategory;
        return $this;
    }

    /**
     * 查询类型,目前包括 month_punish_details:下载违规明细月度 quarter_punish_details:下载违规明细季度  month_rebate_details:下载核算明细月度 quarter_rebate_details:下载核算明细季度 month_performance_details:下载业绩明细月度 quarter_performance_details:下载业绩明细季度, normal_calc_details:激励常规结算, special_calc_details: 激励特殊结算, material_details:激励素材考核
     * @return string
     */
    public function getQueryType(): ?string
    {
        return $this->queryType;
    }

    /**
     * 查询类型,目前包括 month_punish_details:下载违规明细月度 quarter_punish_details:下载违规明细季度  month_rebate_details:下载核算明细月度 quarter_rebate_details:下载核算明细季度 month_performance_details:下载业绩明细月度 quarter_performance_details:下载业绩明细季度, normal_calc_details:激励常规结算, special_calc_details: 激励特殊结算, material_details:激励素材考核
     * @param string $queryType
     * @return self
     */
    public function setQueryType(?string $queryType): self
    {
        $this->queryType = $queryType;
        return $this;
    }

    /**
     * 等待最新数据参数，默认等待
     * @return bool
     */
    public function getWaitLatest(): ?bool
    {
        return $this->waitLatest;
    }

    /**
     * 等待最新数据参数，默认等待
     * @param bool $waitLatest
     * @return self
     */
    public function setWaitLatest(?bool $waitLatest): self
    {
        $this->waitLatest = $waitLatest;
        return $this;
    }

    /**
     * 年
     * @return int
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * 年
     * @param int $year
     * @return self
     */
    public function setYear(?int $year): self
    {
        $this->year = $year;
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
        if ($this->monthQuarter !== null) {
            $result['month_quarter'] = $this->monthQuarter;
        }
        if ($this->policyId !== null) {
            $result['policy_id'] = $this->policyId;
        }
        if ($this->pricingCategory !== null) {
            $result['pricing_category'] = $this->pricingCategory;
        }
        if ($this->queryType !== null) {
            $result['query_type'] = $this->queryType;
        }
        if ($this->waitLatest !== null) {
            $result['wait_latest'] = $this->waitLatest;
        }
        if ($this->year !== null) {
            $result['year'] = $this->year;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['month_quarter'] ?? null) !== null) {
            $obj->monthQuarter = (string) $v;
        }
        if (($v = $data['policy_id'] ?? null) !== null) {
            $obj->policyId = (int) $v;
        }
        if (($v = $data['pricing_category'] ?? null) !== null) {
            $obj->pricingCategory = (string) $v;
        }
        if (($v = $data['query_type'] ?? null) !== null) {
            $obj->queryType = (string) $v;
        }
        if (($v = $data['wait_latest'] ?? null) !== null) {
            $obj->waitLatest = (bool) $v;
        }
        if (($v = $data['year'] ?? null) !== null) {
            $obj->year = (int) $v;
        }
        return $obj;
    }
}
