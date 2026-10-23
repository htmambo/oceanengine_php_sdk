<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAutoGenerateConfigGetV30ResponseDataStrategyDataInnerStrategyStateInner implements \JsonSerializable
{
    /**
     * 配置项key
     * @var string
     */
    protected ?string $stateKey = null;

    /**
     * @var \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataStrategyDataStrategyStateStateType
     */
    protected ?string $stateType = null;

    /**
     * 配置项值
     * @var string
     */
    protected ?string $stateValue = null;

    /**
     * 配置项key
     * @return string
     */
    public function getStateKey(): ?string
    {
        return $this->stateKey;
    }

    /**
     * 配置项key
     * @param string $stateKey
     * @return self
     */
    public function setStateKey(?string $stateKey): self
    {
        $this->stateKey = $stateKey;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataStrategyDataStrategyStateStateType
     */
    public function getStateType(): ?string
    {
        return $this->stateType;
    }

    /**
     * @param \Oceanengine\Models\PromotionAutoGenerateConfigGetV30DataStrategyDataStrategyStateStateType $stateType
     * @return self
     */
    public function setStateType(?string $stateType): self
    {
        $this->stateType = $stateType;
        return $this;
    }

    /**
     * 配置项值
     * @return string
     */
    public function getStateValue(): ?string
    {
        return $this->stateValue;
    }

    /**
     * 配置项值
     * @param string $stateValue
     * @return self
     */
    public function setStateValue(?string $stateValue): self
    {
        $this->stateValue = $stateValue;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->stateKey !== null) {
            $result['state_key'] = $this->stateKey;
        }
        if ($this->stateType !== null) {
            $result['state_type'] = $this->stateType;
        }
        if ($this->stateValue !== null) {
            $result['state_value'] = $this->stateValue;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['state_key'] ?? null) !== null) {
            $obj->stateKey = (string) $v;
        }
        if (($v = $data['state_type'] ?? null) !== null) {
            $obj->stateType = (string) $v;
        }
        if (($v = $data['state_value'] ?? null) !== null) {
            $obj->stateValue = (string) $v;
        }
        return $obj;
    }
}
