<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInner implements \JsonSerializable
{
    /**
     * 资质的具体信息
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInnerDeliveriesInner[]
     */
    protected ?array $deliveries = null;

    /**
     * 原子规则id
     * @var int
     */
    protected ?int $ruleId = null;

    /**
     * 资质的具体信息
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInnerDeliveriesInner[]
     */
    public function getDeliveries(): ?array
    {
        return $this->deliveries;
    }

    /**
     * 资质的具体信息
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInnerDeliveriesInner[] $deliveries
     * @return self
     */
    public function setDeliveries(?array $deliveries): self
    {
        $this->deliveries = $deliveries;
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
            $obj->deliveries = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgUnnecessaryCombinesInnerDeliveryRulesInnerDeliveriesInner::fromArray($vv), $v);
        }
        if (($v = $data['rule_id'] ?? null) !== null) {
            $obj->ruleId = (int) $v;
        }
        return $obj;
    }
}
