<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigUnnecessariesInner implements \JsonSerializable
{
    /**
     * 规则组合id
     * @var int
     */
    protected ?int $combineId = null;

    /**
     * 选填资质场景描述，用于引导用户提交
     * @var string
     */
    protected ?string $description = null;

    /**
     * 具体的资质规则
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigUnnecessariesInnerRulesInner[]
     */
    protected ?array $rules = null;

    /**
     * 规则组合id
     * @return int
     */
    public function getCombineId(): ?int
    {
        return $this->combineId;
    }

    /**
     * 规则组合id
     * @param int $combineId
     * @return self
     */
    public function setCombineId(?int $combineId): self
    {
        $this->combineId = $combineId;
        return $this;
    }

    /**
     * 选填资质场景描述，用于引导用户提交
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 选填资质场景描述，用于引导用户提交
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 具体的资质规则
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigUnnecessariesInnerRulesInner[]
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }

    /**
     * 具体的资质规则
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigUnnecessariesInnerRulesInner[] $rules
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
        if ($this->description !== null) {
            $result['description'] = $this->description;
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
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['rules'] ?? null) !== null && is_array($v)) {
            $obj->rules = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigUnnecessariesInnerRulesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
