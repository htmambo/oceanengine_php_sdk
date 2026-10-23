<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordPromotionUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30RequestPromotionListInner[]
     */
    protected ?array $promotionList = null;

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
     * @return \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30RequestPromotionListInner[]
     */
    public function getPromotionList(): ?array
    {
        return $this->promotionList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30RequestPromotionListInner[] $promotionList
     * @return self
     */
    public function setPromotionList(?array $promotionList): self
    {
        $this->promotionList = $promotionList;
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
        if ($this->promotionList !== null) {
            $result['promotion_list'] = $this->promotionList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['promotion_list'] ?? null) !== null && is_array($v)) {
            $obj->promotionList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordPromotionUpdateV30RequestPromotionListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
