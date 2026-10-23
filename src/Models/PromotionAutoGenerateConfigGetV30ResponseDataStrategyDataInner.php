<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerInfo
     */
    protected ?\Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerInfo $info = null;

    /**
     * 策略id
     * @var int
     */
    protected ?int $strategyId = null;

    /**
     * 策略名称
     * @var string
     */
    protected ?string $strategyName = null;

    /**
     * 策略配置项列表
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerStrategyStateInner[]
     */
    protected ?array $strategyState = null;

    /**
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataStrategyDataType
     */
    protected ?string $type = null;

    /**
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerInfo
     */
    public function getInfo(): ?\Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerInfo
    {
        return $this->info;
    }

    /**
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerInfo $info
     * @return self
     */
    public function setInfo(?\Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerInfo $info): self
    {
        $this->info = $info;
        return $this;
    }

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
     * 策略名称
     * @return string
     */
    public function getStrategyName(): ?string
    {
        return $this->strategyName;
    }

    /**
     * 策略名称
     * @param string $strategyName
     * @return self
     */
    public function setStrategyName(?string $strategyName): self
    {
        $this->strategyName = $strategyName;
        return $this;
    }

    /**
     * 策略配置项列表
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerStrategyStateInner[]
     */
    public function getStrategyState(): ?array
    {
        return $this->strategyState;
    }

    /**
     * 策略配置项列表
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerStrategyStateInner[] $strategyState
     * @return self
     */
    public function setStrategyState(?array $strategyState): self
    {
        $this->strategyState = $strategyState;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataStrategyDataType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataStrategyDataType $type
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
        if ($this->info !== null) {
            $result['info'] = $this->info;
        }
        if ($this->strategyId !== null) {
            $result['strategy_id'] = $this->strategyId;
        }
        if ($this->strategyName !== null) {
            $result['strategy_name'] = $this->strategyName;
        }
        if ($this->strategyState !== null) {
            $result['strategy_state'] = $this->strategyState;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['info'] ?? null) !== null && is_array($v)) {
            $obj->info = \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerInfo::fromArray($v);
        }
        if (($v = $data['strategy_id'] ?? null) !== null) {
            $obj->strategyId = (int) $v;
        }
        if (($v = $data['strategy_name'] ?? null) !== null) {
            $obj->strategyName = (string) $v;
        }
        if (($v = $data['strategy_state'] ?? null) !== null && is_array($v)) {
            $obj->strategyState = array_map(fn ($vv) => \Oceanengine\Models\PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerStrategyStateInner::fromArray($vv), $v);
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
