<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInner implements \JsonSerializable
{
    /**
     * 推广类型id
     * @var int
     */
    protected ?int $combineId = null;

    /**
     * 推广类名称
     * @var string
     */
    protected ?string $promotionTypeName = null;

    /**
     * 具体的资质规则
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInner[]
     */
    protected ?array $rules = null;

    /**
     * 推广类型id
     * @return int
     */
    public function getCombineId(): ?int
    {
        return $this->combineId;
    }

    /**
     * 推广类型id
     * @param int $combineId
     * @return self
     */
    public function setCombineId(?int $combineId): self
    {
        $this->combineId = $combineId;
        return $this;
    }

    /**
     * 推广类名称
     * @return string
     */
    public function getPromotionTypeName(): ?string
    {
        return $this->promotionTypeName;
    }

    /**
     * 推广类名称
     * @param string $promotionTypeName
     * @return self
     */
    public function setPromotionTypeName(?string $promotionTypeName): self
    {
        $this->promotionTypeName = $promotionTypeName;
        return $this;
    }

    /**
     * 具体的资质规则
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInner[]
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }

    /**
     * 具体的资质规则
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInner[] $rules
     * @return self
     */
    public function setRules(?array $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->combineId !== null) {
            $result['combine_id'] = $this->combineId;
        }
        if ($this->promotionTypeName !== null) {
            $result['promotion_type_name'] = $this->promotionTypeName;
        }
        if ($this->rules !== null) {
            $result['rules'] = $this->rules;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['combine_id'] ?? null) !== null) {
            $obj->combineId = (int) $v;
        }
        if (($v = $data['promotion_type_name'] ?? null) !== null) {
            $obj->promotionTypeName = (string) $v;
        }
        if (($v = $data['rules'] ?? null) !== null && is_array($v)) {
            $obj->rules = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
