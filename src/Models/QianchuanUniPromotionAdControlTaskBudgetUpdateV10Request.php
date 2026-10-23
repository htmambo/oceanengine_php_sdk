<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskBudgetUpdateV10Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskBudgetUpdateV10RequestUpdateBudgetInfosInner[]
     */
    protected ?array $updateBudgetInfos = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskBudgetUpdateV10RequestUpdateBudgetInfosInner[]
     */
    public function getUpdateBudgetInfos(): ?array
    {
        return $this->updateBudgetInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskBudgetUpdateV10RequestUpdateBudgetInfosInner[] $updateBudgetInfos
     * @return self
     */
    public function setUpdateBudgetInfos(?array $updateBudgetInfos): self
    {
        $this->updateBudgetInfos = $updateBudgetInfos;
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
        if ($this->updateBudgetInfos !== null) {
            $result['update_budget_infos'] = $this->updateBudgetInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['update_budget_infos'] ?? null) !== null && is_array($v)) {
            $obj->updateBudgetInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdControlTaskBudgetUpdateV10RequestUpdateBudgetInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
