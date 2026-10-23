<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionBidUpdateV30RequestDataInner implements \JsonSerializable
{
    /**
     * 出价，单位为元
     * @var float
     */
    protected ?float $bid = null;

    /**
     * 广告 ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 出价，单位为元
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * 出价，单位为元
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * 广告 ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告 ID
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
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
