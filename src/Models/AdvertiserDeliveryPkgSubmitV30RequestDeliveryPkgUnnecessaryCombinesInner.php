<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInner implements \JsonSerializable
{
    /**
     * 来自【推广产品资质规则配置查询接口】，行业的资质规则中的combine_id
     * @var int
     */
    protected ?int $combineId = null;

    /**
     * 资质规则的组成类型，数组长度最小为1
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInner[]
     */
    protected ?array $deliveryRules = null;

    /**
     * 来自【推广产品资质规则配置查询接口】，行业的资质规则中的combine_id
     * @return int
     */
    public function getCombineId(): ?int
    {
        return $this->combineId;
    }

    /**
     * 来自【推广产品资质规则配置查询接口】，行业的资质规则中的combine_id
     * @param int $combineId
     * @return self
     */
    public function setCombineId(?int $combineId): self
    {
        $this->combineId = $combineId;
        return $this;
    }

    /**
     * 资质规则的组成类型，数组长度最小为1
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInner[]
     */
    public function getDeliveryRules(): ?array
    {
        return $this->deliveryRules;
    }

    /**
     * 资质规则的组成类型，数组长度最小为1
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInner[] $deliveryRules
     * @return self
     */
    public function setDeliveryRules(?array $deliveryRules): self
    {
        $this->deliveryRules = $deliveryRules;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['combine_id'] ?? null) !== null) {
            $obj->combineId = (int) $v;
        }
        if (($v = $data['delivery_rules'] ?? null) !== null && is_array($v)) {
            $obj->deliveryRules = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
