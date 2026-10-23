<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdBudgetUpdateV10Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 更新预算的计划id和预算价格列表，最多支持10个
     * @var \Oceanengine\Models\QianchuanUniPromotionAdBudgetUpdateV10RequestUpdateBudgetInfosInner[]
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
     * 更新预算的计划id和预算价格列表，最多支持10个
     * @return \Oceanengine\Models\QianchuanUniPromotionAdBudgetUpdateV10RequestUpdateBudgetInfosInner[]
     */
    public function getUpdateBudgetInfos(): ?array
    {
        return $this->updateBudgetInfos;
    }

    /**
     * 更新预算的计划id和预算价格列表，最多支持10个
     * @param \Oceanengine\Models\QianchuanUniPromotionAdBudgetUpdateV10RequestUpdateBudgetInfosInner[] $updateBudgetInfos
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
            $obj->updateBudgetInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdBudgetUpdateV10RequestUpdateBudgetInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
