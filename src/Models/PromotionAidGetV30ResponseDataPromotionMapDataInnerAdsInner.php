<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInner[]
     */
    protected ?array $creatives = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInner[]
     */
    public function getCreatives(): ?array
    {
        return $this->creatives;
    }

    /**
     * @param \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInner[] $creatives
     * @return self
     */
    public function setCreatives(?array $creatives): self
    {
        $this->creatives = $creatives;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->creatives !== null) {
            $result['creatives'] = $this->creatives;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['creatives'] ?? null) !== null && is_array($v)) {
            $obj->creatives = array_map(fn ($vv) => \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
