<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomAsyncTaskCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ReportCustomAsyncTaskCreateV30DataTopic
     */
    protected ?string $dataTopic = null;

    /**
     * @var string[]
     */
    protected ?array $dimensions = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\ReportCustomAsyncTaskCreateV30RequestFiltersInner[]
     */
    protected ?array $filters = null;

    /**
     * @var bool
     */
    protected ?bool $force = null;

    /**
     * @var string[]
     */
    protected ?array $metrics = null;

    /**
     * @var \Oceanengine\Models\ReportCustomAsyncTaskCreateV30RequestOrderByInner[]
     */
    protected ?array $orderBy = null;

    /**
     * 页码。默认为1
     * @var int
     */
    protected ?int $page = null;

    /**
     * 页面大小。默认和最大都为100万
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var string
     */
    protected ?string $taskName = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomAsyncTaskCreateV30DataTopic
     */
    public function getDataTopic(): ?string
    {
        return $this->dataTopic;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomAsyncTaskCreateV30DataTopic $dataTopic
     * @return self
     */
    public function setDataTopic(?string $dataTopic): self
    {
        $this->dataTopic = $dataTopic;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDimensions(): ?array
    {
        return $this->dimensions;
    }

    /**
     * @param string[] $dimensions
     * @return self
     */
    public function setDimensions(?array $dimensions): self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomAsyncTaskCreateV30RequestFiltersInner[]
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomAsyncTaskCreateV30RequestFiltersInner[] $filters
     * @return self
     */
    public function setFilters(?array $filters): self
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * @return bool
     */
    public function getForce(): ?bool
    {
        return $this->force;
    }

    /**
     * @param bool $force
     * @return self
     */
    public function setForce(?bool $force): self
    {
        $this->force = $force;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @param string[] $metrics
     * @return self
     */
    public function setMetrics(?array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCustomAsyncTaskCreateV30RequestOrderByInner[]
     */
    public function getOrderBy(): ?array
    {
        return $this->orderBy;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomAsyncTaskCreateV30RequestOrderByInner[] $orderBy
     * @return self
     */
    public function setOrderBy(?array $orderBy): self
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * 页码。默认为1
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 页码。默认为1
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小。默认和最大都为100万
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 页面大小。默认和最大都为100万
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * @param string $taskName
     * @return self
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->dataTopic !== null) {
            $result['data_topic'] = $this->dataTopic;
        }
        if ($this->dimensions !== null) {
            $result['dimensions'] = $this->dimensions;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->filters !== null) {
            $result['filters'] = $this->filters;
        }
        if ($this->force !== null) {
            $result['force'] = $this->force;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        if ($this->orderBy !== null) {
            $result['order_by'] = $this->orderBy;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->taskName !== null) {
            $result['task_name'] = $this->taskName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['data_topic'] ?? null) !== null) {
            $obj->dataTopic = (string) $v;
        }
        if (($v = $data['dimensions'] ?? null) !== null && is_array($v)) {
            $obj->dimensions = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['filters'] ?? null) !== null && is_array($v)) {
            $obj->filters = array_map(fn ($vv) => \Oceanengine\Models\ReportCustomAsyncTaskCreateV30RequestFiltersInner::fromArray($vv), $v);
        }
        if (($v = $data['force'] ?? null) !== null) {
            $obj->force = (bool) $v;
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = $v;
        }
        if (($v = $data['order_by'] ?? null) !== null && is_array($v)) {
            $obj->orderBy = array_map(fn ($vv) => \Oceanengine\Models\ReportCustomAsyncTaskCreateV30RequestOrderByInner::fromArray($vv), $v);
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['task_name'] ?? null) !== null) {
            $obj->taskName = (string) $v;
        }
        return $obj;
    }
}
