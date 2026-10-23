<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInner implements \JsonSerializable
{
    /**
     * 具体的资质信息，数组长度最小为1
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInnerDeliveriesInner[]
     */
    protected ?array $deliveries = null;

    /**
     * 资质的规则id，来自【推广产品资质规则配置查询接口】
     * @var int
     */
    protected ?int $ruleId = null;

    /**
     * 具体的资质信息，数组长度最小为1
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInnerDeliveriesInner[]
     */
    public function getDeliveries(): ?array
    {
        return $this->deliveries;
    }

    /**
     * 具体的资质信息，数组长度最小为1
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInnerDeliveriesInner[] $deliveries
     * @return self
     */
    public function setDeliveries(?array $deliveries): self
    {
        $this->deliveries = $deliveries;
        return $this;
    }

    /**
     * 资质的规则id，来自【推广产品资质规则配置查询接口】
     * @return int
     */
    public function getRuleId(): ?int
    {
        return $this->ruleId;
    }

    /**
     * 资质的规则id，来自【推广产品资质规则配置查询接口】
     * @param int $ruleId
     * @return self
     */
    public function setRuleId(?int $ruleId): self
    {
        $this->ruleId = $ruleId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deliveries !== null) {
            $result['deliveries'] = $this->deliveries;
        }
        if ($this->ruleId !== null) {
            $result['rule_id'] = $this->ruleId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deliveries'] ?? null) !== null && is_array($v)) {
            $obj->deliveries = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInnerDeliveriesInner::fromArray($vv), $v);
        }
        if (($v = $data['rule_id'] ?? null) !== null) {
            $obj->ruleId = (int) $v;
        }
        return $obj;
    }
}
