<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectWeekScheduleUpdateV30Request implements \JsonSerializable
{
    /**
     * 广告主账户id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 批量修改投放时段，限制最多批量修改10个项目
     * @var \Oceanengine\Models\ProjectWeekScheduleUpdateV30RequestDataInner[]
     */
    protected ?array $data = null;

    /**
     * 广告主账户id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主账户id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 批量修改投放时段，限制最多批量修改10个项目
     * @return \Oceanengine\Models\ProjectWeekScheduleUpdateV30RequestDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 批量修改投放时段，限制最多批量修改10个项目
     * @param \Oceanengine\Models\ProjectWeekScheduleUpdateV30RequestDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\ProjectWeekScheduleUpdateV30RequestDataInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
