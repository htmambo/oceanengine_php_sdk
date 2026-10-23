<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeStrategyListV2ResponseDataStrategyModelsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerInfo
     */
    protected ?\Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerInfo $info = null;

    /**
     * 策略配置项列表
     * @var \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInner[]
     */
    protected ?array $stateList = null;

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
     * @var \Oceanengine\Models\CreativeStrategyListV2DataStrategyModelsType
     */
    protected ?string $type = null;

    /**
     * @return \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerInfo
     */
    public function getInfo(): ?\Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerInfo
    {
        return $this->info;
    }

    /**
     * @param \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerInfo $info
     * @return self
     */
    public function setInfo(?\Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerInfo $info): self
    {
        $this->info = $info;
        return $this;
    }

    /**
     * 策略配置项列表
     * @return \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInner[]
     */
    public function getStateList(): ?array
    {
        return $this->stateList;
    }

    /**
     * 策略配置项列表
     * @param \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInner[] $stateList
     * @return self
     */
    public function setStateList(?array $stateList): self
    {
        $this->stateList = $stateList;
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
     * @return \Oceanengine\Models\CreativeStrategyListV2DataStrategyModelsType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\CreativeStrategyListV2DataStrategyModelsType $type
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
        if ($this->stateList !== null) {
            $result['state_list'] = $this->stateList;
        }
        if ($this->strategyId !== null) {
            $result['strategy_id'] = $this->strategyId;
        }
        if ($this->strategyName !== null) {
            $result['strategy_name'] = $this->strategyName;
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
            $obj->info = \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerInfo::fromArray($v);
        }
        if (($v = $data['state_list'] ?? null) !== null && is_array($v)) {
            $obj->stateList = array_map(fn ($vv) => \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInner::fromArray($vv), $v);
        }
        if (($v = $data['strategy_id'] ?? null) !== null) {
            $obj->strategyId = (int) $v;
        }
        if (($v = $data['strategy_name'] ?? null) !== null) {
            $obj->strategyName = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
