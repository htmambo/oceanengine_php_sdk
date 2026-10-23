<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionNewcustomerCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\PromotionNewcustomerCreateV30RequestAudience
     */
    protected ?\Oceanengine\Models\PromotionNewcustomerCreateV30RequestAudience $audience = null;

    /**
     * 抖音号id
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var \Oceanengine\Models\PromotionNewcustomerCreateV30BidType
     */
    protected ?string $bidType = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * 目标转化出价
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * 投放天数
     * @var int
     */
    protected ?int $deliveryDuration = null;

    /**
     * ea
     * @var \Oceanengine\Models\PromotionNewcustomerCreateV30ExternalAction[]
     */
    protected ?array $externalAction = null;

    /**
     * @var \Oceanengine\Models\PromotionNewcustomerCreateV30RequestPromotionMaterials
     */
    protected ?\Oceanengine\Models\PromotionNewcustomerCreateV30RequestPromotionMaterials $promotionMaterials = null;

    /**
     * 关联产品
     * @var \Oceanengine\Models\PromotionNewcustomerCreateV30RequestRelatedProductsInner[]
     */
    protected ?array $relatedProducts = null;

    /**
     * 投放时段
     * @var string
     */
    protected ?string $scheduleTime = null;

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
     * @return \Oceanengine\Models\PromotionNewcustomerCreateV30RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\PromotionNewcustomerCreateV30RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\PromotionNewcustomerCreateV30RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\PromotionNewcustomerCreateV30RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * 抖音号id
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionNewcustomerCreateV30BidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\PromotionNewcustomerCreateV30BidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 目标转化出价
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * 目标转化出价
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

    /**
     * 投放天数
     * @return int
     */
    public function getDeliveryDuration(): ?int
    {
        return $this->deliveryDuration;
    }

    /**
     * 投放天数
     * @param int $deliveryDuration
     * @return self
     */
    public function setDeliveryDuration(?int $deliveryDuration): self
    {
        $this->deliveryDuration = $deliveryDuration;
        return $this;
    }

    /**
     * ea
     * @return \Oceanengine\Models\PromotionNewcustomerCreateV30ExternalAction[]
     */
    public function getExternalAction(): ?array
    {
        return $this->externalAction;
    }

    /**
     * ea
     * @param \Oceanengine\Models\PromotionNewcustomerCreateV30ExternalAction[] $externalAction
     * @return self
     */
    public function setExternalAction(?array $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionNewcustomerCreateV30RequestPromotionMaterials
     */
    public function getPromotionMaterials(): ?\Oceanengine\Models\PromotionNewcustomerCreateV30RequestPromotionMaterials
    {
        return $this->promotionMaterials;
    }

    /**
     * @param \Oceanengine\Models\PromotionNewcustomerCreateV30RequestPromotionMaterials $promotionMaterials
     * @return self
     */
    public function setPromotionMaterials(?\Oceanengine\Models\PromotionNewcustomerCreateV30RequestPromotionMaterials $promotionMaterials): self
    {
        $this->promotionMaterials = $promotionMaterials;
        return $this;
    }

    /**
     * 关联产品
     * @return \Oceanengine\Models\PromotionNewcustomerCreateV30RequestRelatedProductsInner[]
     */
    public function getRelatedProducts(): ?array
    {
        return $this->relatedProducts;
    }

    /**
     * 关联产品
     * @param \Oceanengine\Models\PromotionNewcustomerCreateV30RequestRelatedProductsInner[] $relatedProducts
     * @return self
     */
    public function setRelatedProducts(?array $relatedProducts): self
    {
        $this->relatedProducts = $relatedProducts;
        return $this;
    }

    /**
     * 投放时段
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
     * 投放时段
     * @param string $scheduleTime
     * @return self
     */
    public function setScheduleTime(?string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
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
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->deliveryDuration !== null) {
            $result['delivery_duration'] = $this->deliveryDuration;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->promotionMaterials !== null) {
            $result['promotion_materials'] = $this->promotionMaterials;
        }
        if ($this->relatedProducts !== null) {
            $result['related_products'] = $this->relatedProducts;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\PromotionNewcustomerCreateV30RequestAudience::fromArray($v);
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['delivery_duration'] ?? null) !== null) {
            $obj->deliveryDuration = (int) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null && is_array($v)) {
            $obj->externalAction = $v;
        }
        if (($v = $data['promotion_materials'] ?? null) !== null && is_array($v)) {
            $obj->promotionMaterials = \Oceanengine\Models\PromotionNewcustomerCreateV30RequestPromotionMaterials::fromArray($v);
        }
        if (($v = $data['related_products'] ?? null) !== null && is_array($v)) {
            $obj->relatedProducts = array_map(fn ($vv) => \Oceanengine\Models\PromotionNewcustomerCreateV30RequestRelatedProductsInner::fromArray($vv), $v);
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        return $obj;
    }
}
