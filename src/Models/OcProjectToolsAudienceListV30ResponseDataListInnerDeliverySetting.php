<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceListV30ResponseDataListInnerDeliverySetting implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var float
     */
    protected ?float $cpaBidRate = null;

    /**
     * @var float
     */
    protected ?float $deepBid = null;

    /**
     * @var float
     */
    protected ?float $deepBidRate = null;

    /**
     * @var float
     */
    protected ?float $firstRoiGoal = null;

    /**
     * @var float
     */
    protected ?float $firstRoiGoalRate = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var float
     */
    protected ?float $roiGoalRate = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30DataListDeliverySettingSettingType
     */
    protected ?string $settingType = null;

    /**
     * @var float
     */
    protected ?float $sevenRoiGoal = null;

    /**
     * @var float
     */
    protected ?float $sevenRoiGoalRate = null;

    /**
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

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
    public function getDeepBid(): ?float
    {
        return $this->deepBid;
    }

    /**
     * @param float $deepBid
     * @return self
     */
    public function setDeepBid(?float $deepBid): self
    {
        $this->deepBid = $deepBid;
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
    public function getFirstRoiGoal(): ?float
    {
        return $this->firstRoiGoal;
    }

    /**
     * @param float $firstRoiGoal
     * @return self
     */
    public function setFirstRoiGoal(?float $firstRoiGoal): self
    {
        $this->firstRoiGoal = $firstRoiGoal;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstRoiGoalRate(): ?float
    {
        return $this->firstRoiGoalRate;
    }

    /**
     * @param float $firstRoiGoalRate
     * @return self
     */
    public function setFirstRoiGoalRate(?float $firstRoiGoalRate): self
    {
        $this->firstRoiGoalRate = $firstRoiGoalRate;
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
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30DataListDeliverySettingSettingType
     */
    public function getSettingType(): ?string
    {
        return $this->settingType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30DataListDeliverySettingSettingType $settingType
     * @return self
     */
    public function setSettingType(?string $settingType): self
    {
        $this->settingType = $settingType;
        return $this;
    }

    /**
     * @return float
     */
    public function getSevenRoiGoal(): ?float
    {
        return $this->sevenRoiGoal;
    }

    /**
     * @param float $sevenRoiGoal
     * @return self
     */
    public function setSevenRoiGoal(?float $sevenRoiGoal): self
    {
        $this->sevenRoiGoal = $sevenRoiGoal;
        return $this;
    }

    /**
     * @return float
     */
    public function getSevenRoiGoalRate(): ?float
    {
        return $this->sevenRoiGoalRate;
    }

    /**
     * @param float $sevenRoiGoalRate
     * @return self
     */
    public function setSevenRoiGoalRate(?float $sevenRoiGoalRate): self
    {
        $this->sevenRoiGoalRate = $sevenRoiGoalRate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->cpaBidRate !== null) {
            $result['cpa_bid_rate'] = $this->cpaBidRate;
        }
        if ($this->deepBid !== null) {
            $result['deep_bid'] = $this->deepBid;
        }
        if ($this->deepBidRate !== null) {
            $result['deep_bid_rate'] = $this->deepBidRate;
        }
        if ($this->firstRoiGoal !== null) {
            $result['first_roi_goal'] = $this->firstRoiGoal;
        }
        if ($this->firstRoiGoalRate !== null) {
            $result['first_roi_goal_rate'] = $this->firstRoiGoalRate;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->roiGoalRate !== null) {
            $result['roi_goal_rate'] = $this->roiGoalRate;
        }
        if ($this->settingType !== null) {
            $result['setting_type'] = $this->settingType;
        }
        if ($this->sevenRoiGoal !== null) {
            $result['seven_roi_goal'] = $this->sevenRoiGoal;
        }
        if ($this->sevenRoiGoalRate !== null) {
            $result['seven_roi_goal_rate'] = $this->sevenRoiGoalRate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['cpa_bid_rate'] ?? null) !== null) {
            $obj->cpaBidRate = (float) $v;
        }
        if (($v = $data['deep_bid'] ?? null) !== null) {
            $obj->deepBid = (float) $v;
        }
        if (($v = $data['deep_bid_rate'] ?? null) !== null) {
            $obj->deepBidRate = (float) $v;
        }
        if (($v = $data['first_roi_goal'] ?? null) !== null) {
            $obj->firstRoiGoal = (float) $v;
        }
        if (($v = $data['first_roi_goal_rate'] ?? null) !== null) {
            $obj->firstRoiGoalRate = (float) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['roi_goal_rate'] ?? null) !== null) {
            $obj->roiGoalRate = (float) $v;
        }
        if (($v = $data['setting_type'] ?? null) !== null) {
            $obj->settingType = (string) $v;
        }
        if (($v = $data['seven_roi_goal'] ?? null) !== null) {
            $obj->sevenRoiGoal = (float) $v;
        }
        if (($v = $data['seven_roi_goal_rate'] ?? null) !== null) {
            $obj->sevenRoiGoalRate = (float) $v;
        }
        return $obj;
    }
}
