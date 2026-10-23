<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetail implements \JsonSerializable
{
    /**
     * 应用的时间
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetailApplyTimesInner[]
     */
    protected ?array $applyTimes = null;

    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy
     */
    protected ?string $strategy = null;

    /**
     * @var string
     */
    protected ?string $strategyDescription = null;

    /**
     * @var string
     */
    protected ?string $strategyName = null;

    /**
     * 应用的时间
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetailApplyTimesInner[]
     */
    public function getApplyTimes(): ?array
    {
        return $this->applyTimes;
    }

    /**
     * 应用的时间
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetailApplyTimesInner[] $applyTimes
     * @return self
     */
    public function setApplyTimes(?array $applyTimes): self
    {
        $this->applyTimes = $applyTimes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy
     */
    public function getStrategy(): ?string
    {
        return $this->strategy;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy $strategy
     * @return self
     */
    public function setStrategy(?string $strategy): self
    {
        $this->strategy = $strategy;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrategyDescription(): ?string
    {
        return $this->strategyDescription;
    }

    /**
     * @param string $strategyDescription
     * @return self
     */
    public function setStrategyDescription(?string $strategyDescription): self
    {
        $this->strategyDescription = $strategyDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrategyName(): ?string
    {
        return $this->strategyName;
    }

    /**
     * @param string $strategyName
     * @return self
     */
    public function setStrategyName(?string $strategyName): self
    {
        $this->strategyName = $strategyName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyTimes !== null) {
            $result['apply_times'] = $this->applyTimes;
        }
        if ($this->strategy !== null) {
            $result['strategy'] = $this->strategy;
        }
        if ($this->strategyDescription !== null) {
            $result['strategy_description'] = $this->strategyDescription;
        }
        if ($this->strategyName !== null) {
            $result['strategy_name'] = $this->strategyName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_times'] ?? null) !== null && is_array($v)) {
            $obj->applyTimes = array_map(fn ($vv) => \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetailApplyTimesInner::fromArray($vv), $v);
        }
        if (($v = $data['strategy'] ?? null) !== null) {
            $obj->strategy = (string) $v;
        }
        if (($v = $data['strategy_description'] ?? null) !== null) {
            $obj->strategyDescription = (string) $v;
        }
        if (($v = $data['strategy_name'] ?? null) !== null) {
            $obj->strategyName = (string) $v;
        }
        return $obj;
    }
}
