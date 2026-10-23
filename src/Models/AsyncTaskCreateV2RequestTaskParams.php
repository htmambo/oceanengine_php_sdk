<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AsyncTaskCreateV2RequestTaskParams implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $endDate = null;

    /**
     * @var string[]
     */
    protected ?array $fields = null;

    /**
     * @var \Oceanengine\Models\AsyncTaskCreateV2RequestTaskParamsFiltering
     */
    protected ?\Oceanengine\Models\AsyncTaskCreateV2RequestTaskParamsFiltering $filtering = null;

    /**
     * @var string[]
     */
    protected ?array $groupBy = null;

    /**
     * @var string
     */
    protected ?string $orderField = null;

    /**
     * @var \Oceanengine\Models\AsyncTaskCreateV2TaskParamsOrderType
     */
    protected ?string $orderType = null;

    /**
     * @var string
     */
    protected ?string $startDate = null;

    /**
     * @return string
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return self
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @param string[] $fields
     * @return self
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AsyncTaskCreateV2RequestTaskParamsFiltering
     */
    public function getFiltering(): ?\Oceanengine\Models\AsyncTaskCreateV2RequestTaskParamsFiltering
    {
        return $this->filtering;
    }

    /**
     * @param \Oceanengine\Models\AsyncTaskCreateV2RequestTaskParamsFiltering $filtering
     * @return self
     */
    public function setFiltering(?\Oceanengine\Models\AsyncTaskCreateV2RequestTaskParamsFiltering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGroupBy(): ?array
    {
        return $this->groupBy;
    }

    /**
     * @param string[] $groupBy
     * @return self
     */
    public function setGroupBy(?array $groupBy): self
    {
        $this->groupBy = $groupBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderField(): ?string
    {
        return $this->orderField;
    }

    /**
     * @param string $orderField
     * @return self
     */
    public function setOrderField(?string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AsyncTaskCreateV2TaskParamsOrderType
     */
    public function getOrderType(): ?string
    {
        return $this->orderType;
    }

    /**
     * @param \Oceanengine\Models\AsyncTaskCreateV2TaskParamsOrderType $orderType
     * @return self
     */
    public function setOrderType(?string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
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
        if ($this->endDate !== null) {
            $result['end_date'] = $this->endDate;
        }
        if ($this->fields !== null) {
            $result['fields'] = $this->fields;
        }
        if ($this->filtering !== null) {
            $result['filtering'] = $this->filtering;
        }
        if ($this->groupBy !== null) {
            $result['group_by'] = $this->groupBy;
        }
        if ($this->orderField !== null) {
            $result['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $result['order_type'] = $this->orderType;
        }
        if ($this->startDate !== null) {
            $result['start_date'] = $this->startDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_date'] ?? null) !== null) {
            $obj->endDate = (string) $v;
        }
        if (($v = $data['fields'] ?? null) !== null && is_array($v)) {
            $obj->fields = $v;
        }
        if (($v = $data['filtering'] ?? null) !== null && is_array($v)) {
            $obj->filtering = \Oceanengine\Models\AsyncTaskCreateV2RequestTaskParamsFiltering::fromArray($v);
        }
        if (($v = $data['group_by'] ?? null) !== null && is_array($v)) {
            $obj->groupBy = $v;
        }
        if (($v = $data['order_field'] ?? null) !== null) {
            $obj->orderField = (string) $v;
        }
        if (($v = $data['order_type'] ?? null) !== null) {
            $obj->orderType = (string) $v;
        }
        if (($v = $data['start_date'] ?? null) !== null) {
            $obj->startDate = (string) $v;
        }
        return $obj;
    }
}
