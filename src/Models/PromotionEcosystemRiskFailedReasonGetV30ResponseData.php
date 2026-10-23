<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEcosystemRiskFailedReasonGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionEcosystemRiskFailedReasonGetV30ResponseDataMaterialRejectInner[]
     */
    protected ?array $materialReject = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @return \Oceanengine\Models\PromotionEcosystemRiskFailedReasonGetV30ResponseDataMaterialRejectInner[]
     */
    public function getMaterialReject(): ?array
    {
        return $this->materialReject;
    }

    /**
     * @param \Oceanengine\Models\PromotionEcosystemRiskFailedReasonGetV30ResponseDataMaterialRejectInner[] $materialReject
     * @return self
     */
    public function setMaterialReject(?array $materialReject): self
    {
        $this->materialReject = $materialReject;
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
            $obj->materialReject = array_map(fn ($vv) => \Oceanengine\Models\PromotionEcosystemRiskFailedReasonGetV30ResponseDataMaterialRejectInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
