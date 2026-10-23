<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30ResponseDataListInnerOptimizeGoal implements \JsonSerializable
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
     * @var \Oceanengine\Models\ProjectListV30DataListOptimizeGoalDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListOptimizeGoalExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var string
     */
    protected ?string $gameAddictionId = null;

    /**
     * @var int
     */
    protected ?int $paidSwitch = null;

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
     * @return \Oceanengine\Models\ProjectListV30DataListOptimizeGoalDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListOptimizeGoalDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListOptimizeGoalExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListOptimizeGoalExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameAddictionId(): ?string
    {
        return $this->gameAddictionId;
    }

    /**
     * @param string $gameAddictionId
     * @return self
     */
    public function setGameAddictionId(?string $gameAddictionId): self
    {
        $this->gameAddictionId = $gameAddictionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaidSwitch(): ?int
    {
        return $this->paidSwitch;
    }

    /**
     * @param int $paidSwitch
     * @return self
     */
    public function setPaidSwitch(?int $paidSwitch): self
    {
        $this->paidSwitch = $paidSwitch;
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
        if ($this->paidSwitch !== null) {
            $result['paid_switch'] = $this->paidSwitch;
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
        if (($v = $data['paid_switch'] ?? null) !== null) {
            $obj->paidSwitch = (int) $v;
        }
        return $obj;
    }
}
