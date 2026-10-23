<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAutoGenerateConfigCreateV30RequestStrategyDataInner implements \JsonSerializable
{
    /**
     * 策略id
     * @var int
     */
    protected ?int $strategyId = null;

    /**
     * 策略配置项列表
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30RequestStrategyDataInnerStrategyStateInner[]
     */
    protected ?array $strategyState = null;

    /**
     * 策略id
     * @return int
     */
    public function getStrategyId(): ?int
    {
        return $this->strategyId;
    }

    /**
     * 策略id
     * @param int $strategyId
     * @return self
     */
    public function setStrategyId(?int $strategyId): self
    {
        $this->strategyId = $strategyId;
        return $this;
    }

    /**
     * 策略配置项列表
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30RequestStrategyDataInnerStrategyStateInner[]
     */
    public function getStrategyState(): ?array
    {
        return $this->strategyState;
    }

    /**
     * 策略配置项列表
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30RequestStrategyDataInnerStrategyStateInner[] $strategyState
     * @return self
     */
    public function setStrategyState(?array $strategyState): self
    {
        $this->strategyState = $strategyState;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->strategyId !== null) {
            $result['strategy_id'] = $this->strategyId;
        }
        if ($this->strategyState !== null) {
            $result['strategy_state'] = $this->strategyState;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['strategy_id'] ?? null) !== null) {
            $obj->strategyId = (int) $v;
        }
        if (($v = $data['strategy_state'] ?? null) !== null && is_array($v)) {
            $obj->strategyState = array_map(fn ($vv) => \Oceanengine\Models\PromotionAutoGenerateConfigCreateV30RequestStrategyDataInnerStrategyStateInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
