<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionGetV30ResponseDataSuggestionInfoListInnerSevenDaysRoiSuggestionPackageSuggestionInnerProjectInfoInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $projectCurrentBid = null;

    /**
     * @var float
     */
    protected ?float $projectCurrentRoiGoal = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @return float
     */
    public function getProjectCurrentBid(): ?float
    {
        return $this->projectCurrentBid;
    }

    /**
     * @param float $projectCurrentBid
     * @return self
     */
    public function setProjectCurrentBid(?float $projectCurrentBid): self
    {
        $this->projectCurrentBid = $projectCurrentBid;
        return $this;
    }

    /**
     * @return float
     */
    public function getProjectCurrentRoiGoal(): ?float
    {
        return $this->projectCurrentRoiGoal;
    }

    /**
     * @param float $projectCurrentRoiGoal
     * @return self
     */
    public function setProjectCurrentRoiGoal(?float $projectCurrentRoiGoal): self
    {
        $this->projectCurrentRoiGoal = $projectCurrentRoiGoal;
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
        if ($this->projectCurrentBid !== null) {
            $result['project_current_bid'] = $this->projectCurrentBid;
        }
        if ($this->projectCurrentRoiGoal !== null) {
            $result['project_current_roi_goal'] = $this->projectCurrentRoiGoal;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_current_bid'] ?? null) !== null) {
            $obj->projectCurrentBid = (float) $v;
        }
        if (($v = $data['project_current_roi_goal'] ?? null) !== null) {
            $obj->projectCurrentRoiGoal = (float) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
