<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdRoi2GoalUpdateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10RequestUpdateRoi2InfosInner[]
     */
    protected ?array $updateRoi2Infos = null;

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
     * @return \Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10RequestUpdateRoi2InfosInner[]
     */
    public function getUpdateRoi2Infos(): ?array
    {
        return $this->updateRoi2Infos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10RequestUpdateRoi2InfosInner[] $updateRoi2Infos
     * @return self
     */
    public function setUpdateRoi2Infos(?array $updateRoi2Infos): self
    {
        $this->updateRoi2Infos = $updateRoi2Infos;
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
        if ($this->updateRoi2Infos !== null) {
            $result['update_roi2_infos'] = $this->updateRoi2Infos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['update_roi2_infos'] ?? null) !== null && is_array($v)) {
            $obj->updateRoi2Infos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10RequestUpdateRoi2InfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
