<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsKeywordListV30ResponseDataListInnerDeliverySetting implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $cpaBidRate = null;

    /**
     * @var float
     */
    protected ?float $deepBidRate = null;

    /**
     * @var float
     */
    protected ?float $roiGoalRate = null;

    /**
     * @return float
     */
    public function getCpaBidRate(): ?float
    {
        return $this->cpaBidRate;
    }

    /**
     * @param float $cpaBidRate
     * @return self
     */
    public function setCpaBidRate(?float $cpaBidRate): self
    {
        $this->cpaBidRate = $cpaBidRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeepBidRate(): ?float
    {
        return $this->deepBidRate;
    }

    /**
     * @param float $deepBidRate
     * @return self
     */
    public function setDeepBidRate(?float $deepBidRate): self
    {
        $this->deepBidRate = $deepBidRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoiGoalRate(): ?float
    {
        return $this->roiGoalRate;
    }

    /**
     * @param float $roiGoalRate
     * @return self
     */
    public function setRoiGoalRate(?float $roiGoalRate): self
    {
        $this->roiGoalRate = $roiGoalRate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cpaBidRate !== null) {
            $result['cpa_bid_rate'] = $this->cpaBidRate;
        }
        if ($this->deepBidRate !== null) {
            $result['deep_bid_rate'] = $this->deepBidRate;
        }
        if ($this->roiGoalRate !== null) {
            $result['roi_goal_rate'] = $this->roiGoalRate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cpa_bid_rate'] ?? null) !== null) {
            $obj->cpaBidRate = (float) $v;
        }
        if (($v = $data['deep_bid_rate'] ?? null) !== null) {
            $obj->deepBidRate = (float) $v;
        }
        if (($v = $data['roi_goal_rate'] ?? null) !== null) {
            $obj->roiGoalRate = (float) $v;
        }
        return $obj;
    }
}
