<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionDeepbidUpdateV30RequestDataInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $deepbid = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @return float
     */
    public function getDeepbid(): ?float
    {
        return $this->deepbid;
    }

    /**
     * @param float $deepbid
     * @return self
     */
    public function setDeepbid(?float $deepbid): self
    {
        $this->deepbid = $deepbid;
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
        if ($this->deepbid !== null) {
            $result['deepbid'] = $this->deepbid;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deepbid'] ?? null) !== null) {
            $obj->deepbid = (float) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
