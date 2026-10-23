<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombine implements \JsonSerializable
{
    /**
     * 推广类型id，来自【推广产品资质规则配置查询接口】，行业的资质规则中的promotion_type_id
     * @var int
     */
    protected ?int $combineId = null;

    /**
     * 资质规则
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInner[]
     */
    protected ?array $deliveryRules = null;

    /**
     * 推广类型描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * 推广类型id，来自【推广产品资质规则配置查询接口】，行业的资质规则中的promotion_type_id
     * @return int
     */
    public function getCombineId(): ?int
    {
        return $this->combineId;
    }

    /**
     * 推广类型id，来自【推广产品资质规则配置查询接口】，行业的资质规则中的promotion_type_id
     * @param int $combineId
     * @return self
     */
    public function setCombineId(?int $combineId): self
    {
        $this->combineId = $combineId;
        return $this;
    }

    /**
     * 资质规则
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInner[]
     */
    public function getDeliveryRules(): ?array
    {
        return $this->deliveryRules;
    }

    /**
     * 资质规则
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInner[] $deliveryRules
     * @return self
     */
    public function setDeliveryRules(?array $deliveryRules): self
    {
        $this->deliveryRules = $deliveryRules;
        return $this;
    }

    /**
     * 推广类型描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 推广类型描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
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
        if ($this->deliveryRules !== null) {
            $result['delivery_rules'] = $this->deliveryRules;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['combine_id'] ?? null) !== null) {
            $obj->combineId = (int) $v;
        }
        if (($v = $data['delivery_rules'] ?? null) !== null && is_array($v)) {
            $obj->deliveryRules = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInner::fromArray($vv), $v);
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        return $obj;
    }
}
