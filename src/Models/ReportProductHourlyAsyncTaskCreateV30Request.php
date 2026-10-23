<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportProductHourlyAsyncTaskCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $endDate = null;

    /**
     * @var string[]
     */
    protected ?array $fields = null;

    /**
     * @var \Oceanengine\Models\ReportProductHourlyAsyncTaskCreateV30RequestFiltering
     */
    protected ?\Oceanengine\Models\ReportProductHourlyAsyncTaskCreateV30RequestFiltering $filtering = null;

    /**
     * @var int
     */
    protected ?int $productPlatformId = null;

    /**
     * @var string
     */
    protected ?string $startDate = null;

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
     * @return \Oceanengine\Models\ReportProductHourlyAsyncTaskCreateV30RequestFiltering
     */
    public function getFiltering(): ?\Oceanengine\Models\ReportProductHourlyAsyncTaskCreateV30RequestFiltering
    {
        return $this->filtering;
    }

    /**
     * @param \Oceanengine\Models\ReportProductHourlyAsyncTaskCreateV30RequestFiltering $filtering
     * @return self
     */
    public function setFiltering(?\Oceanengine\Models\ReportProductHourlyAsyncTaskCreateV30RequestFiltering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductPlatformId(): ?int
    {
        return $this->productPlatformId;
    }

    /**
     * @param int $productPlatformId
     * @return self
     */
    public function setProductPlatformId(?int $productPlatformId): self
    {
        $this->productPlatformId = $productPlatformId;
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
        if ($this->endDate !== null) {
            $result['end_date'] = $this->endDate;
        }
        if ($this->fields !== null) {
            $result['fields'] = $this->fields;
        }
        if ($this->filtering !== null) {
            $result['filtering'] = $this->filtering;
        }
        if ($this->productPlatformId !== null) {
            $result['product_platform_id'] = $this->productPlatformId;
        }
        if ($this->startDate !== null) {
            $result['start_date'] = $this->startDate;
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
        if (($v = $data['end_date'] ?? null) !== null) {
            $obj->endDate = (string) $v;
        }
        if (($v = $data['fields'] ?? null) !== null && is_array($v)) {
            $obj->fields = $v;
        }
        if (($v = $data['filtering'] ?? null) !== null && is_array($v)) {
            $obj->filtering = \Oceanengine\Models\ReportProductHourlyAsyncTaskCreateV30RequestFiltering::fromArray($v);
        }
        if (($v = $data['product_platform_id'] ?? null) !== null) {
            $obj->productPlatformId = (int) $v;
        }
        if (($v = $data['start_date'] ?? null) !== null) {
            $obj->startDate = (string) $v;
        }
        if (($v = $data['task_name'] ?? null) !== null) {
            $obj->taskName = (string) $v;
        }
        return $obj;
    }
}
