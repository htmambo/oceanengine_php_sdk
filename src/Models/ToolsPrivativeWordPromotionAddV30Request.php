<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordPromotionAddV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 项目列表
     * @var \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30RequestPromotionListInner[]
     */
    protected ?array $promotionList = null;

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
     * 项目列表
     * @return \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30RequestPromotionListInner[]
     */
    public function getPromotionList(): ?array
    {
        return $this->promotionList;
    }

    /**
     * 项目列表
     * @param \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30RequestPromotionListInner[] $promotionList
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
            $obj->promotionList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordPromotionAddV30RequestPromotionListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
