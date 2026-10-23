<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInner implements \JsonSerializable
{
    /**
     * 原子规则描述，用于引导用户提交
     * @var string
     */
    protected ?string $description = null;

    /**
     * 资质类型
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInnerQualTypesInner[]
     */
    protected ?array $qualTypes = null;

    /**
     * 原子规则id
     * @var int
     */
    protected ?int $ruleId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30DataIndustryConfigNecessariesRulesType
     */
    protected ?string $type = null;

    /**
     * 原子规则描述，用于引导用户提交
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 原子规则描述，用于引导用户提交
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 资质类型
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInnerQualTypesInner[]
     */
    public function getQualTypes(): ?array
    {
        return $this->qualTypes;
    }

    /**
     * 资质类型
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInnerQualTypesInner[] $qualTypes
     * @return self
     */
    public function setQualTypes(?array $qualTypes): self
    {
        $this->qualTypes = $qualTypes;
        return $this;
    }

    /**
     * 原子规则id
     * @return int
     */
    public function getRuleId(): ?int
    {
        return $this->ruleId;
    }

    /**
     * 原子规则id
     * @param int $ruleId
     * @return self
     */
    public function setRuleId(?int $ruleId): self
    {
        $this->ruleId = $ruleId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30DataIndustryConfigNecessariesRulesType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30DataIndustryConfigNecessariesRulesType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->qualTypes !== null) {
            $result['qual_types'] = $this->qualTypes;
        }
        if ($this->ruleId !== null) {
            $result['rule_id'] = $this->ruleId;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['qual_types'] ?? null) !== null && is_array($v)) {
            $obj->qualTypes = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInnerRulesInnerQualTypesInner::fromArray($vv), $v);
        }
        if (($v = $data['rule_id'] ?? null) !== null) {
            $obj->ruleId = (int) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
