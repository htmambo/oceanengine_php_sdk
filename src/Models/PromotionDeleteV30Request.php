<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionDeleteV30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 待删除的广告ID列表
     * @var int[]
     */
    protected ?array $promotionIds = null;

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
     * 待删除的广告ID列表
     * @return int[]
     */
    public function getPromotionIds(): ?array
    {
        return $this->promotionIds;
    }

    /**
     * 待删除的广告ID列表
     * @param int[] $promotionIds
     * @return self
     */
    public function setPromotionIds(?array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
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
        if ($this->promotionIds !== null) {
            $result['promotion_ids'] = $this->promotionIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionIds = $v;
        }
        return $obj;
    }
}
