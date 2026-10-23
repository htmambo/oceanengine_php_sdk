<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAidGetV30ResponseDataPromotionMapDataInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInner[]
     */
    protected ?array $ads = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @return \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInner[]
     */
    public function getAds(): ?array
    {
        return $this->ads;
    }

    /**
     * @param \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInner[] $ads
     * @return self
     */
    public function setAds(?array $ads): self
    {
        $this->ads = $ads;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ads !== null) {
            $result['ads'] = $this->ads;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ads'] ?? null) !== null && is_array($v)) {
            $obj->ads = array_map(fn ($vv) => \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
