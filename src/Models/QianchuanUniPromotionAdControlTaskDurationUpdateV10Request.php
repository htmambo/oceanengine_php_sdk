<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskDurationUpdateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 需要更新的计划ID和调控时长
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10RequestUpdateDurationInfosInner[]
     */
    protected ?array $updateDurationInfos = null;

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
     * 需要更新的计划ID和调控时长
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10RequestUpdateDurationInfosInner[]
     */
    public function getUpdateDurationInfos(): ?array
    {
        return $this->updateDurationInfos;
    }

    /**
     * 需要更新的计划ID和调控时长
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10RequestUpdateDurationInfosInner[] $updateDurationInfos
     * @return self
     */
    public function setUpdateDurationInfos(?array $updateDurationInfos): self
    {
        $this->updateDurationInfos = $updateDurationInfos;
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
        if ($this->updateDurationInfos !== null) {
            $result['update_duration_infos'] = $this->updateDurationInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['update_duration_infos'] ?? null) !== null && is_array($v)) {
            $obj->updateDurationInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10RequestUpdateDurationInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
