<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdScheduleDateUpdateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10RequestUpdateScheduleInfosInner[]
     */
    protected ?array $updateScheduleInfos = null;

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
     * @return \Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10RequestUpdateScheduleInfosInner[]
     */
    public function getUpdateScheduleInfos(): ?array
    {
        return $this->updateScheduleInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10RequestUpdateScheduleInfosInner[] $updateScheduleInfos
     * @return self
     */
    public function setUpdateScheduleInfos(?array $updateScheduleInfos): self
    {
        $this->updateScheduleInfos = $updateScheduleInfos;
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
        if ($this->updateScheduleInfos !== null) {
            $result['update_schedule_infos'] = $this->updateScheduleInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['update_schedule_infos'] ?? null) !== null && is_array($v)) {
            $obj->updateScheduleInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10RequestUpdateScheduleInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
