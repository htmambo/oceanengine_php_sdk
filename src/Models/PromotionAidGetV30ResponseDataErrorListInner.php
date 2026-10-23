<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAidGetV30ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

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
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        return $obj;
    }
}
