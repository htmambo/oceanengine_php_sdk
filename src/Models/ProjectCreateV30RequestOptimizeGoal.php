<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectCreateV30RequestOptimizeGoal implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $assetIds = null;

    /**
     * @var int
     */
    protected ?int $convertId = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30OptimizeGoalDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\ProjectCreateV30OptimizeGoalExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 关键行为
     * @var string
     */
    protected ?string $gameAddictionId = null;

    /**
     * @return int[]
     */
    public function getAssetIds(): ?array
    {
        return $this->assetIds;
    }

    /**
     * @param int[] $assetIds
     * @return self
     */
    public function setAssetIds(?array $assetIds): self
    {
        $this->assetIds = $assetIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvertId(): ?int
    {
        return $this->convertId;
    }

    /**
     * @param int $convertId
     * @return self
     */
    public function setConvertId(?int $convertId): self
    {
        $this->convertId = $convertId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30OptimizeGoalDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30OptimizeGoalDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectCreateV30OptimizeGoalExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\ProjectCreateV30OptimizeGoalExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 关键行为
     * @return string
     */
    public function getGameAddictionId(): ?string
    {
        return $this->gameAddictionId;
    }

    /**
     * 关键行为
     * @param string $gameAddictionId
     * @return self
     */
    public function setGameAddictionId(?string $gameAddictionId): self
    {
        $this->gameAddictionId = $gameAddictionId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetIds !== null) {
            $result['asset_ids'] = $this->assetIds;
        }
        if ($this->convertId !== null) {
            $result['convert_id'] = $this->convertId;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->gameAddictionId !== null) {
            $result['game_addiction_id'] = $this->gameAddictionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_ids'] ?? null) !== null && is_array($v)) {
            $obj->assetIds = $v;
        }
        if (($v = $data['convert_id'] ?? null) !== null) {
            $obj->convertId = (int) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['game_addiction_id'] ?? null) !== null) {
            $obj->gameAddictionId = (string) $v;
        }
        return $obj;
    }
}
