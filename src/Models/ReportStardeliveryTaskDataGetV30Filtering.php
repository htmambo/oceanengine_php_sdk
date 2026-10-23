<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportStardeliveryTaskDataGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterInner[]
     */
    protected ?array $metricValueFilter = null;

    /**
     * @var string
     */
    protected ?string $starTaskCategoryName = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringStarTaskCategoryType
     */
    protected ?string $starTaskCategoryType = null;

    /**
     * @var int[]
     */
    protected ?array $starTaskIds = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus
     */
    protected ?string $starTaskStatus = null;

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterInner[]
     */
    public function getMetricValueFilter(): ?array
    {
        return $this->metricValueFilter;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterInner[] $metricValueFilter
     * @return self
     */
    public function setMetricValueFilter(?array $metricValueFilter): self
    {
        $this->metricValueFilter = $metricValueFilter;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarTaskCategoryName(): ?string
    {
        return $this->starTaskCategoryName;
    }

    /**
     * @param string $starTaskCategoryName
     * @return self
     */
    public function setStarTaskCategoryName(?string $starTaskCategoryName): self
    {
        $this->starTaskCategoryName = $starTaskCategoryName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringStarTaskCategoryType
     */
    public function getStarTaskCategoryType(): ?string
    {
        return $this->starTaskCategoryType;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringStarTaskCategoryType $starTaskCategoryType
     * @return self
     */
    public function setStarTaskCategoryType(?string $starTaskCategoryType): self
    {
        $this->starTaskCategoryType = $starTaskCategoryType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getStarTaskIds(): ?array
    {
        return $this->starTaskIds;
    }

    /**
     * @param int[] $starTaskIds
     * @return self
     */
    public function setStarTaskIds(?array $starTaskIds): self
    {
        $this->starTaskIds = $starTaskIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus
     */
    public function getStarTaskStatus(): ?string
    {
        return $this->starTaskStatus;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus $starTaskStatus
     * @return self
     */
    public function setStarTaskStatus(?string $starTaskStatus): self
    {
        $this->starTaskStatus = $starTaskStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->metricValueFilter !== null) {
            $result['metric_value_filter'] = $this->metricValueFilter;
        }
        if ($this->starTaskCategoryName !== null) {
            $result['star_task_category_name'] = $this->starTaskCategoryName;
        }
        if ($this->starTaskCategoryType !== null) {
            $result['star_task_category_type'] = $this->starTaskCategoryType;
        }
        if ($this->starTaskIds !== null) {
            $result['star_task_ids'] = $this->starTaskIds;
        }
        if ($this->starTaskStatus !== null) {
            $result['star_task_status'] = $this->starTaskStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['metric_value_filter'] ?? null) !== null && is_array($v)) {
            $obj->metricValueFilter = array_map(fn ($vv) => \Oceanengine\Models\ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterInner::fromArray($vv), $v);
        }
        if (($v = $data['star_task_category_name'] ?? null) !== null) {
            $obj->starTaskCategoryName = (string) $v;
        }
        if (($v = $data['star_task_category_type'] ?? null) !== null) {
            $obj->starTaskCategoryType = (string) $v;
        }
        if (($v = $data['star_task_ids'] ?? null) !== null && is_array($v)) {
            $obj->starTaskIds = $v;
        }
        if (($v = $data['star_task_status'] ?? null) !== null) {
            $obj->starTaskStatus = (string) $v;
        }
        return $obj;
    }
}
