<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandListV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandListV2FilteringComponentType
     */
    protected ?string $componentType = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\StarDemandListV2FilteringQueryTimeRange
     */
    protected ?\Oceanengine\Models\StarDemandListV2FilteringQueryTimeRange $queryTimeRange = null;

    /**
     * @var \Oceanengine\Models\StarDemandListV2FilteringTaskCategory
     */
    protected ?string $taskCategory = null;

    /**
     * @var \Oceanengine\Models\StarDemandListV2FilteringUniversalOrderStatus
     */
    protected ?string $universalOrderStatus = null;

    /**
     * @var \Oceanengine\Models\StarDemandListV2FilteringUniversalSettlementType
     */
    protected ?string $universalSettlementType = null;

    /**
     * @return \Oceanengine\Models\StarDemandListV2FilteringComponentType
     */
    public function getComponentType(): ?string
    {
        return $this->componentType;
    }

    /**
     * @param \Oceanengine\Models\StarDemandListV2FilteringComponentType $componentType
     * @return self
     */
    public function setComponentType(?string $componentType): self
    {
        $this->componentType = $componentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandListV2FilteringQueryTimeRange
     */
    public function getQueryTimeRange(): ?\Oceanengine\Models\StarDemandListV2FilteringQueryTimeRange
    {
        return $this->queryTimeRange;
    }

    /**
     * @param \Oceanengine\Models\StarDemandListV2FilteringQueryTimeRange $queryTimeRange
     * @return self
     */
    public function setQueryTimeRange(?\Oceanengine\Models\StarDemandListV2FilteringQueryTimeRange $queryTimeRange): self
    {
        $this->queryTimeRange = $queryTimeRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandListV2FilteringTaskCategory
     */
    public function getTaskCategory(): ?string
    {
        return $this->taskCategory;
    }

    /**
     * @param \Oceanengine\Models\StarDemandListV2FilteringTaskCategory $taskCategory
     * @return self
     */
    public function setTaskCategory(?string $taskCategory): self
    {
        $this->taskCategory = $taskCategory;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandListV2FilteringUniversalOrderStatus
     */
    public function getUniversalOrderStatus(): ?string
    {
        return $this->universalOrderStatus;
    }

    /**
     * @param \Oceanengine\Models\StarDemandListV2FilteringUniversalOrderStatus $universalOrderStatus
     * @return self
     */
    public function setUniversalOrderStatus(?string $universalOrderStatus): self
    {
        $this->universalOrderStatus = $universalOrderStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandListV2FilteringUniversalSettlementType
     */
    public function getUniversalSettlementType(): ?string
    {
        return $this->universalSettlementType;
    }

    /**
     * @param \Oceanengine\Models\StarDemandListV2FilteringUniversalSettlementType $universalSettlementType
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->queryTimeRange !== null) {
            $result['query_time_range'] = $this->queryTimeRange;
        }
        if ($this->taskCategory !== null) {
            $result['task_category'] = $this->taskCategory;
        }
        if ($this->universalOrderStatus !== null) {
            $result['universal_order_status'] = $this->universalOrderStatus;
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
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['query_time_range'] ?? null) !== null && is_array($v)) {
            $obj->queryTimeRange = \Oceanengine\Models\StarDemandListV2FilteringQueryTimeRange::fromArray($v);
        }
        if (($v = $data['task_category'] ?? null) !== null) {
            $obj->taskCategory = (string) $v;
        }
        if (($v = $data['universal_order_status'] ?? null) !== null) {
            $obj->universalOrderStatus = (string) $v;
        }
        if (($v = $data['universal_settlement_type'] ?? null) !== null) {
            $obj->universalSettlementType = (string) $v;
        }
        return $obj;
    }
}
