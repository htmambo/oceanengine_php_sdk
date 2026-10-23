<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectRoigoalUpdateV30RequestDataInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var \Oceanengine\Models\ProjectRoigoalUpdateV30RequestDataInnerShopMultiRoiGoalsInner[]
     */
    protected ?array $shopMultiRoiGoals = null;

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
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
     * @param float $roiGoal
     * @return self
     */
    public function setRoiGoal(?float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectRoigoalUpdateV30RequestDataInnerShopMultiRoiGoalsInner[]
     */
    public function getShopMultiRoiGoals(): ?array
    {
        return $this->shopMultiRoiGoals;
    }

    /**
     * @param \Oceanengine\Models\ProjectRoigoalUpdateV30RequestDataInnerShopMultiRoiGoalsInner[] $shopMultiRoiGoals
     * @return self
     */
    public function setShopMultiRoiGoals(?array $shopMultiRoiGoals): self
    {
        $this->shopMultiRoiGoals = $shopMultiRoiGoals;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->shopMultiRoiGoals !== null) {
            $result['shop_multi_roi_goals'] = $this->shopMultiRoiGoals;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['shop_multi_roi_goals'] ?? null) !== null && is_array($v)) {
            $obj->shopMultiRoiGoals = array_map(fn ($vv) => \Oceanengine\Models\ProjectRoigoalUpdateV30RequestDataInnerShopMultiRoiGoalsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
