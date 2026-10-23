<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerOptimizedGoalGetV30ResponseDataGoalsInnerDeepGoalsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes[]
     */
    protected ?array $assetTypes = null;

    /**
     * @var \Oceanengine\Models\EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var bool
     */
    protected ?bool $historyBack = null;

    /**
     * @var string
     */
    protected ?string $optimizationName = null;

    /**
     * @var bool
     */
    protected ?bool $twentyFourHourBack = null;

    /**
     * @return \Oceanengine\Models\EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes[]
     */
    public function getAssetTypes(): ?array
    {
        return $this->assetTypes;
    }

    /**
     * @param \Oceanengine\Models\EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes[] $assetTypes
     * @return self
     */
    public function setAssetTypes(?array $assetTypes): self
    {
        $this->assetTypes = $assetTypes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHistoryBack(): ?bool
    {
        return $this->historyBack;
    }

    /**
     * @param bool $historyBack
     * @return self
     */
    public function setHistoryBack(?bool $historyBack): self
    {
        $this->historyBack = $historyBack;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptimizationName(): ?string
    {
        return $this->optimizationName;
    }

    /**
     * @param string $optimizationName
     * @return self
     */
    public function setOptimizationName(?string $optimizationName): self
    {
        $this->optimizationName = $optimizationName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTwentyFourHourBack(): ?bool
    {
        return $this->twentyFourHourBack;
    }

    /**
     * @param bool $twentyFourHourBack
     * @return self
     */
    public function setTwentyFourHourBack(?bool $twentyFourHourBack): self
    {
        $this->twentyFourHourBack = $twentyFourHourBack;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetTypes !== null) {
            $result['asset_types'] = $this->assetTypes;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->historyBack !== null) {
            $result['history_back'] = $this->historyBack;
        }
        if ($this->optimizationName !== null) {
            $result['optimization_name'] = $this->optimizationName;
        }
        if ($this->twentyFourHourBack !== null) {
            $result['twenty_four_hour_back'] = $this->twentyFourHourBack;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_types'] ?? null) !== null && is_array($v)) {
            $obj->assetTypes = $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['history_back'] ?? null) !== null) {
            $obj->historyBack = (bool) $v;
        }
        if (($v = $data['optimization_name'] ?? null) !== null) {
            $obj->optimizationName = (string) $v;
        }
        if (($v = $data['twenty_four_hour_back'] ?? null) !== null) {
            $obj->twentyFourHourBack = (bool) $v;
        }
        return $obj;
    }
}
