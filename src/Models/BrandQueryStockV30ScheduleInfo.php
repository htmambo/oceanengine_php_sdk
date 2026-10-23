<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandQueryStockV30ScheduleInfo implements \JsonSerializable
{
    /**
     * 需要查询的日期列表
     * @var \Oceanengine\Models\BrandQueryStockV30ScheduleInfoScheduleListInner[]
     */
    protected ?array $scheduleList = null;

    /**
     * @var \Oceanengine\Models\BrandQueryStockV30ScheduleInfoStockIncreasePackageType
     */
    protected ?string $stockIncreasePackageType = null;

    /**
     * 需要查询的日期列表
     * @return \Oceanengine\Models\BrandQueryStockV30ScheduleInfoScheduleListInner[]
     */
    public function getScheduleList(): ?array
    {
        return $this->scheduleList;
    }

    /**
     * 需要查询的日期列表
     * @param \Oceanengine\Models\BrandQueryStockV30ScheduleInfoScheduleListInner[] $scheduleList
     * @return self
     */
    public function setScheduleList(?array $scheduleList): self
    {
        $this->scheduleList = $scheduleList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandQueryStockV30ScheduleInfoStockIncreasePackageType
     */
    public function getStockIncreasePackageType(): ?string
    {
        return $this->stockIncreasePackageType;
    }

    /**
     * @param \Oceanengine\Models\BrandQueryStockV30ScheduleInfoStockIncreasePackageType $stockIncreasePackageType
     * @return self
     */
    public function setStockIncreasePackageType(?string $stockIncreasePackageType): self
    {
        $this->stockIncreasePackageType = $stockIncreasePackageType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->scheduleList !== null) {
            $result['schedule_list'] = $this->scheduleList;
        }
        if ($this->stockIncreasePackageType !== null) {
            $result['stock_increase_package_type'] = $this->stockIncreasePackageType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['schedule_list'] ?? null) !== null && is_array($v)) {
            $obj->scheduleList = array_map(fn ($vv) => \Oceanengine\Models\BrandQueryStockV30ScheduleInfoScheduleListInner::fromArray($vv), $v);
        }
        if (($v = $data['stock_increase_package_type'] ?? null) !== null) {
            $obj->stockIncreasePackageType = (string) $v;
        }
        return $obj;
    }
}
