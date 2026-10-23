<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseSetV30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 起量信息，如果需要删除请传[]
     * @var \Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInner[]
     */
    protected ?array $raiseInfo = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告ID
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * 起量信息，如果需要删除请传[]
     * @return \Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInner[]
     */
    public function getRaiseInfo(): ?array
    {
        return $this->raiseInfo;
    }

    /**
     * 起量信息，如果需要删除请传[]
     * @param \Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInner[] $raiseInfo
     * @return self
     */
    public function setRaiseInfo(?array $raiseInfo): self
    {
        $this->raiseInfo = $raiseInfo;
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
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->raiseInfo !== null) {
            $result['raise_info'] = $this->raiseInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['raise_info'] ?? null) !== null && is_array($v)) {
            $obj->raiseInfo = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionRaiseSetV30RequestRaiseInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
