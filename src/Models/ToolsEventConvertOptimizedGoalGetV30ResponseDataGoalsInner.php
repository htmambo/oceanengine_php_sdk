<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventConvertOptimizedGoalGetV30ResponseDataGoalsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30DataGoalsAssetTypes[]
     */
    protected ?array $assetTypes = null;

    /**
     * @var int
     */
    protected ?int $assetsId = null;

    /**
     * @var \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30ResponseDataGoalsInnerDeepGoalsInner[]
     */
    protected ?array $deepGoals = null;

    /**
     * @var \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30DataGoalsExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var bool
     */
    protected ?bool $historyBack = null;

    /**
     * @var string
     */
    protected ?string $optimizationName = null;

    /**
     * @var int
     */
    protected ?int $spareAssetsId = null;

    /**
     * @var bool
     */
    protected ?bool $twentyFourHourBack = null;

    /**
     * @var \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType
     */
    protected ?string $valueType = null;

    /**
     * @return \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30DataGoalsAssetTypes[]
     */
    public function getAssetTypes(): ?array
    {
        return $this->assetTypes;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30DataGoalsAssetTypes[] $assetTypes
     * @return self
     */
    public function setAssetTypes(?array $assetTypes): self
    {
        $this->assetTypes = $assetTypes;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssetsId(): ?int
    {
        return $this->assetsId;
    }

    /**
     * @param int $assetsId
     * @return self
     */
    public function setAssetsId(?int $assetsId): self
    {
        $this->assetsId = $assetsId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30ResponseDataGoalsInnerDeepGoalsInner[]
     */
    public function getDeepGoals(): ?array
    {
        return $this->deepGoals;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30ResponseDataGoalsInnerDeepGoalsInner[] $deepGoals
     * @return self
     */
    public function setDeepGoals(?array $deepGoals): self
    {
        $this->deepGoals = $deepGoals;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30DataGoalsExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30DataGoalsExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
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
     * @return int
     */
    public function getSpareAssetsId(): ?int
    {
        return $this->spareAssetsId;
    }

    /**
     * @param int $spareAssetsId
     * @return self
     */
    public function setSpareAssetsId(?int $spareAssetsId): self
    {
        $this->spareAssetsId = $spareAssetsId;
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
     * @return \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType
     */
    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType $valueType
     * @return self
     */
    public function setValueType(?string $valueType): self
    {
        $this->valueType = $valueType;
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
        if ($this->assetsId !== null) {
            $result['assets_id'] = $this->assetsId;
        }
        if ($this->deepGoals !== null) {
            $result['deepGoals'] = $this->deepGoals;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->historyBack !== null) {
            $result['history_back'] = $this->historyBack;
        }
        if ($this->optimizationName !== null) {
            $result['optimization_name'] = $this->optimizationName;
        }
        if ($this->spareAssetsId !== null) {
            $result['spare_assets_id'] = $this->spareAssetsId;
        }
        if ($this->twentyFourHourBack !== null) {
            $result['twenty_four_hour_back'] = $this->twentyFourHourBack;
        }
        if ($this->valueType !== null) {
            $result['value_type'] = $this->valueType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_types'] ?? null) !== null && is_array($v)) {
            $obj->assetTypes = $v;
        }
        if (($v = $data['assets_id'] ?? null) !== null) {
            $obj->assetsId = (int) $v;
        }
        if (($v = $data['deepGoals'] ?? null) !== null && is_array($v)) {
            $obj->deepGoals = array_map(fn ($vv) => \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30ResponseDataGoalsInnerDeepGoalsInner::fromArray($vv), $v);
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['history_back'] ?? null) !== null) {
            $obj->historyBack = (bool) $v;
        }
        if (($v = $data['optimization_name'] ?? null) !== null) {
            $obj->optimizationName = (string) $v;
        }
        if (($v = $data['spare_assets_id'] ?? null) !== null) {
            $obj->spareAssetsId = (int) $v;
        }
        if (($v = $data['twenty_four_hour_back'] ?? null) !== null) {
            $obj->twentyFourHourBack = (bool) $v;
        }
        if (($v = $data['value_type'] ?? null) !== null) {
            $obj->valueType = (string) $v;
        }
        return $obj;
    }
}
