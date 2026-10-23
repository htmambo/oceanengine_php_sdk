<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class GoingGlobalUpdateV30RequestProjectListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $goingGlobalBudget = null;

    /**
     * @var float
     */
    protected ?float $goingGlobalRoiGoal = null;

    /**
     * @var \Oceanengine\Models\GoingGlobalUpdateV30ProjectListGoingGlobalSwitch
     */
    protected ?string $goingGlobalSwitch = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @return float
     */
    public function getGoingGlobalBudget(): ?float
    {
        return $this->goingGlobalBudget;
    }

    /**
     * @param float $goingGlobalBudget
     * @return self
     */
    public function setGoingGlobalBudget(?float $goingGlobalBudget): self
    {
        $this->goingGlobalBudget = $goingGlobalBudget;
        return $this;
    }

    /**
     * @return float
     */
    public function getGoingGlobalRoiGoal(): ?float
    {
        return $this->goingGlobalRoiGoal;
    }

    /**
     * @param float $goingGlobalRoiGoal
     * @return self
     */
    public function setGoingGlobalRoiGoal(?float $goingGlobalRoiGoal): self
    {
        $this->goingGlobalRoiGoal = $goingGlobalRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\GoingGlobalUpdateV30ProjectListGoingGlobalSwitch
     */
    public function getGoingGlobalSwitch(): ?string
    {
        return $this->goingGlobalSwitch;
    }

    /**
     * @param \Oceanengine\Models\GoingGlobalUpdateV30ProjectListGoingGlobalSwitch $goingGlobalSwitch
     * @return self
     */
    public function setGoingGlobalSwitch(?string $goingGlobalSwitch): self
    {
        $this->goingGlobalSwitch = $goingGlobalSwitch;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->goingGlobalBudget !== null) {
            $result['going_global_budget'] = $this->goingGlobalBudget;
        }
        if ($this->goingGlobalRoiGoal !== null) {
            $result['going_global_roi_goal'] = $this->goingGlobalRoiGoal;
        }
        if ($this->goingGlobalSwitch !== null) {
            $result['going_global_switch'] = $this->goingGlobalSwitch;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['going_global_budget'] ?? null) !== null) {
            $obj->goingGlobalBudget = (float) $v;
        }
        if (($v = $data['going_global_roi_goal'] ?? null) !== null) {
            $obj->goingGlobalRoiGoal = (float) $v;
        }
        if (($v = $data['going_global_switch'] ?? null) !== null) {
            $obj->goingGlobalSwitch = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
