<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandListV2DataListComponentType
     */
    protected ?string $componentType = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 任务id
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * @var \Oceanengine\Models\StarDemandListV2DataListTaskCategory
     */
    protected ?string $taskCategory = null;

    /**
     * @var \Oceanengine\Models\StarDemandListV2DataListUniversalSettlementType
     */
    protected ?string $universalSettlementType = null;

    /**
     * @return \Oceanengine\Models\StarDemandListV2DataListComponentType
     */
    public function getComponentType(): ?string
    {
        return $this->componentType;
    }

    /**
     * @param \Oceanengine\Models\StarDemandListV2DataListComponentType $componentType
     * @return self
     */
    public function setComponentType(?string $componentType): self
    {
        $this->componentType = $componentType;
        return $this;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
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
     * 任务名称
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * 任务名称
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandListV2DataListTaskCategory
     */
    public function getTaskCategory(): ?string
    {
        return $this->taskCategory;
    }

    /**
     * @param \Oceanengine\Models\StarDemandListV2DataListTaskCategory $taskCategory
     * @return self
     */
    public function setTaskCategory(?string $taskCategory): self
    {
        $this->taskCategory = $taskCategory;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandListV2DataListUniversalSettlementType
     */
    public function getUniversalSettlementType(): ?string
    {
        return $this->universalSettlementType;
    }

    /**
     * @param \Oceanengine\Models\StarDemandListV2DataListUniversalSettlementType $universalSettlementType
     * @return self
     */
    public function setUniversalSettlementType(?string $universalSettlementType): self
    {
        $this->universalSettlementType = $universalSettlementType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->componentType !== null) {
            $result['component_type'] = $this->componentType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->taskCategory !== null) {
            $result['task_category'] = $this->taskCategory;
        }
        if ($this->universalSettlementType !== null) {
            $result['universal_settlement_type'] = $this->universalSettlementType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['component_type'] ?? null) !== null) {
            $obj->componentType = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['task_category'] ?? null) !== null) {
            $obj->taskCategory = (string) $v;
        }
        if (($v = $data['universal_settlement_type'] ?? null) !== null) {
            $obj->universalSettlementType = (string) $v;
        }
        return $obj;
    }
}
