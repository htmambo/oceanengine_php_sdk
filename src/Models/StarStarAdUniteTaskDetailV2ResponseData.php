<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarStarAdUniteTaskDetailV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarStarAdUniteTaskDetailV2DataAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 任务预算，单位：元*1000，建议获取后除以1000展示为元单位
     * @var int
     */
    protected ?int $budget = null;

    /**
     * 任务id
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * @var \Oceanengine\Models\StarStarAdUniteTaskDetailV2DataEvaluateType
     */
    protected ?string $evaluateType = null;

    /**
     * 客户的星图id
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @var \Oceanengine\Models\StarStarAdUniteTaskDetailV2ResponseDataStatInfoInner[]
     */
    protected ?array $statInfo = null;

    /**
     * @var \Oceanengine\Models\StarStarAdUniteTaskDetailV2DataStatus
     */
    protected ?string $status = null;

    /**
     * 投放时段(没返回就是全时段投放)
     * @var int[][]
     */
    protected ?array $weekSchedule = null;

    /**
     * @return \Oceanengine\Models\StarStarAdUniteTaskDetailV2DataAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\StarStarAdUniteTaskDetailV2DataAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 任务预算，单位：元*1000，建议获取后除以1000展示为元单位
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 任务预算，单位：元*1000，建议获取后除以1000展示为元单位
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 任务id
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * 任务id
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarStarAdUniteTaskDetailV2DataEvaluateType
     */
    public function getEvaluateType(): ?string
    {
        return $this->evaluateType;
    }

    /**
     * @param \Oceanengine\Models\StarStarAdUniteTaskDetailV2DataEvaluateType $evaluateType
     * @return self
     */
    public function setEvaluateType(?string $evaluateType): self
    {
        $this->evaluateType = $evaluateType;
        return $this;
    }

    /**
     * 客户的星图id
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 客户的星图id
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarStarAdUniteTaskDetailV2ResponseDataStatInfoInner[]
     */
    public function getStatInfo(): ?array
    {
        return $this->statInfo;
    }

    /**
     * @param \Oceanengine\Models\StarStarAdUniteTaskDetailV2ResponseDataStatInfoInner[] $statInfo
     * @return self
     */
    public function setStatInfo(?array $statInfo): self
    {
        $this->statInfo = $statInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarStarAdUniteTaskDetailV2DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\StarStarAdUniteTaskDetailV2DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 投放时段(没返回就是全时段投放)
     * @return int[][]
     */
    public function getWeekSchedule(): ?array
    {
        return $this->weekSchedule;
    }

    /**
     * 投放时段(没返回就是全时段投放)
     * @param int[][] $weekSchedule
     * @return self
     */
    public function setWeekSchedule(?array $weekSchedule): self
    {
        $this->weekSchedule = $weekSchedule;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->evaluateType !== null) {
            $result['evaluate_type'] = $this->evaluateType;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->statInfo !== null) {
            $result['stat_info'] = $this->statInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->weekSchedule !== null) {
            $result['week_schedule'] = $this->weekSchedule;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['evaluate_type'] ?? null) !== null) {
            $obj->evaluateType = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['stat_info'] ?? null) !== null && is_array($v)) {
            $obj->statInfo = array_map(fn ($vv) => \Oceanengine\Models\StarStarAdUniteTaskDetailV2ResponseDataStatInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['week_schedule'] ?? null) !== null && is_array($v)) {
            $obj->weekSchedule = $v;
        }
        return $obj;
    }
}
