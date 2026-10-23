<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerBudgetInfo implements \JsonSerializable
{
    /**
     * 出价
     * @var float
     */
    protected ?float $bid = null;

    /**
     * 预算
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var array<string,int>
     */
    protected ?array $dailyQuantity = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsBudgetInfoGdSendType
     */
    protected ?string $gdSendType = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsBudgetInfoPricingType
     */
    protected ?string $pricingType = null;

    /**
     * 投放量
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInner[]
     */
    protected ?array $quantityInfo = null;

    /**
     * 出价
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * 出价
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * 预算
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 预算
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return array<string,int>
     */
    public function getDailyQuantity(): ?array
    {
        return $this->dailyQuantity;
    }

    /**
     * @param array<string,int> $dailyQuantity
     * @return self
     */
    public function setDailyQuantity(?array $dailyQuantity): self
    {
        $this->dailyQuantity = $dailyQuantity;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsBudgetInfoGdSendType
     */
    public function getGdSendType(): ?string
    {
        return $this->gdSendType;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsBudgetInfoGdSendType $gdSendType
     * @return self
     */
    public function setGdSendType(?string $gdSendType): self
    {
        $this->gdSendType = $gdSendType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsBudgetInfoPricingType
     */
    public function getPricingType(): ?string
    {
        return $this->pricingType;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsBudgetInfoPricingType $pricingType
     * @return self
     */
    public function setPricingType(?string $pricingType): self
    {
        $this->pricingType = $pricingType;
        return $this;
    }

    /**
     * 投放量
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInner[]
     */
    public function getQuantityInfo(): ?array
    {
        return $this->quantityInfo;
    }

    /**
     * 投放量
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInner[] $quantityInfo
     * @return self
     */
    public function setQuantityInfo(?array $quantityInfo): self
    {
        $this->quantityInfo = $quantityInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->dailyQuantity !== null) {
            $result['daily_quantity'] = $this->dailyQuantity;
        }
        if ($this->gdSendType !== null) {
            $result['gd_send_type'] = $this->gdSendType;
        }
        if ($this->pricingType !== null) {
            $result['pricing_type'] = $this->pricingType;
        }
        if ($this->quantityInfo !== null) {
            $result['quantity_info'] = $this->quantityInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['daily_quantity'] ?? null) !== null && is_array($v)) {
            $obj->dailyQuantity = $v;
        }
        if (($v = $data['gd_send_type'] ?? null) !== null) {
            $obj->gdSendType = (string) $v;
        }
        if (($v = $data['pricing_type'] ?? null) !== null) {
            $obj->pricingType = (string) $v;
        }
        if (($v = $data['quantity_info'] ?? null) !== null && is_array($v)) {
            $obj->quantityInfo = array_map(fn ($vv) => \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerBudgetInfoQuantityInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
