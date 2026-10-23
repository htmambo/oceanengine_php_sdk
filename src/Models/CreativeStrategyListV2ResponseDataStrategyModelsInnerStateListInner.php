<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInnerLimit
     */
    protected ?\Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInnerLimit $limit = null;

    /**
     * 配置项key
     * @var string
     */
    protected ?string $stateKey = null;

    /**
     * 配置项名称
     * @var string
     */
    protected ?string $stateName = null;

    /**
     * @var \Oceanengine\Models\CreativeStrategyListV2DataStrategyModelsStateListStateType
     */
    protected ?string $stateType = null;

    /**
     * @return \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInnerLimit
     */
    public function getLimit(): ?\Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInnerLimit
    {
        return $this->limit;
    }

    /**
     * @param \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInnerLimit $limit
     * @return self
     */
    public function setLimit(?\Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInnerLimit $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

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
     * 配置项名称
     * @return string
     */
    public function getStateName(): ?string
    {
        return $this->stateName;
    }

    /**
     * 配置项名称
     * @param string $stateName
     * @return self
     */
    public function setStateName(?string $stateName): self
    {
        $this->stateName = $stateName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeStrategyListV2DataStrategyModelsStateListStateType
     */
    public function getStateType(): ?string
    {
        return $this->stateType;
    }

    /**
     * @param \Oceanengine\Models\CreativeStrategyListV2DataStrategyModelsStateListStateType $stateType
     * @return self
     */
    public function setStateType(?string $stateType): self
    {
        $this->stateType = $stateType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->stateKey !== null) {
            $result['state_key'] = $this->stateKey;
        }
        if ($this->stateName !== null) {
            $result['state_name'] = $this->stateName;
        }
        if ($this->stateType !== null) {
            $result['state_type'] = $this->stateType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['limit'] ?? null) !== null && is_array($v)) {
            $obj->limit = \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInnerLimit::fromArray($v);
        }
        if (($v = $data['state_key'] ?? null) !== null) {
            $obj->stateKey = (string) $v;
        }
        if (($v = $data['state_name'] ?? null) !== null) {
            $obj->stateName = (string) $v;
        }
        if (($v = $data['state_type'] ?? null) !== null) {
            $obj->stateType = (string) $v;
        }
        return $obj;
    }
}
