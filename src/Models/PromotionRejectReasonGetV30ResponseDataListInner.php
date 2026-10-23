<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionRejectReasonGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 素材维度审核建议列表
     * @var \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInner[]
     */
    protected ?array $materialReject = null;

    /**
     * 广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 广告维度审核建议列表
     * @var \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInnerPromotionRejectInner[]
     */
    protected ?array $promotionReject = null;

    /**
     * 素材维度审核建议列表
     * @return \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInner[]
     */
    public function getMaterialReject(): ?array
    {
        return $this->materialReject;
    }

    /**
     * 素材维度审核建议列表
     * @param \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInner[] $materialReject
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
     * 广告维度审核建议列表
     * @return \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInnerPromotionRejectInner[]
     */
    public function getPromotionReject(): ?array
    {
        return $this->promotionReject;
    }

    /**
     * 广告维度审核建议列表
     * @param \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInnerPromotionRejectInner[] $promotionReject
     * @return self
     */
    public function setPromotionReject(?array $promotionReject): self
    {
        $this->promotionReject = $promotionReject;
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
        if ($this->promotionReject !== null) {
            $result['promotion_reject'] = $this->promotionReject;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_reject'] ?? null) !== null && is_array($v)) {
            $obj->materialReject = array_map(fn ($vv) => \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['promotion_reject'] ?? null) !== null && is_array($v)) {
            $obj->promotionReject = array_map(fn ($vv) => \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInnerPromotionRejectInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
