<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionRejectReasonGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInner[]
     */
    protected ?array $materialReject = null;

    /**
     * 广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @return \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInner[]
     */
    public function getMaterialReject(): ?array
    {
        return $this->materialReject;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInner[] $materialReject
     * @return self
     */
    public function setMaterialReject(?array $materialReject): self
    {
        $this->materialReject = $materialReject;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialReject !== null) {
            $result['material_reject'] = $this->materialReject;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_reject'] ?? null) !== null && is_array($v)) {
            $obj->materialReject = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
