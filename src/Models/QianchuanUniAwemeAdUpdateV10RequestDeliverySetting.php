<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdUpdateV10RequestDeliverySetting implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var float
     */
    protected ?float $dailyDeliveryTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var int
     */
    protected ?int $estimateConvert = null;

    /**
     * @var float
     */
    protected ?float $estimateRoiGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingLiveScheduleType
     */
    protected ?string $liveScheduleType = null;

    /**
     * @var int
     */
    protected ?int $minEstimateConvert = null;

    /**
     * @var float
     */
    protected ?float $minEstimateRoiGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingQcpxMode
     */
    protected ?string $qcpxMode = null;

    /**
     * @var float
     */
    protected ?float $roi2Goal = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingVideoScheduleType
     */
    protected ?string $videoScheduleType = null;

    /**
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return float
     */
    public function getDailyDeliveryTime(): ?float
    {
        return $this->dailyDeliveryTime;
    }

    /**
     * @param float $dailyDeliveryTime
     * @return self
     */
    public function setDailyDeliveryTime(?float $dailyDeliveryTime): self
    {
        $this->dailyDeliveryTime = $dailyDeliveryTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getEstimateConvert(): ?int
    {
        return $this->estimateConvert;
    }

    /**
     * @param int $estimateConvert
     * @return self
     */
    public function setEstimateConvert(?int $estimateConvert): self
    {
        $this->estimateConvert = $estimateConvert;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimateRoiGoal(): ?float
    {
        return $this->estimateRoiGoal;
    }

    /**
     * @param float $estimateRoiGoal
     * @return self
     */
    public function setEstimateRoiGoal(?float $estimateRoiGoal): self
    {
        $this->estimateRoiGoal = $estimateRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingLiveScheduleType
     */
    public function getLiveScheduleType(): ?string
    {
        return $this->liveScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingLiveScheduleType $liveScheduleType
     * @return self
     */
    public function setLiveScheduleType(?string $liveScheduleType): self
    {
        $this->liveScheduleType = $liveScheduleType;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinEstimateConvert(): ?int
    {
        return $this->minEstimateConvert;
    }

    /**
     * @param int $minEstimateConvert
     * @return self
     */
    public function setMinEstimateConvert(?int $minEstimateConvert): self
    {
        $this->minEstimateConvert = $minEstimateConvert;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinEstimateRoiGoal(): ?float
    {
        return $this->minEstimateRoiGoal;
    }

    /**
     * @param float $minEstimateRoiGoal
     * @return self
     */
    public function setMinEstimateRoiGoal(?float $minEstimateRoiGoal): self
    {
        $this->minEstimateRoiGoal = $minEstimateRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingQcpxMode
     */
    public function getQcpxMode(): ?string
    {
        return $this->qcpxMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingQcpxMode $qcpxMode
     * @return self
     */
    public function setQcpxMode(?string $qcpxMode): self
    {
        $this->qcpxMode = $qcpxMode;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoi2Goal(): ?float
    {
        return $this->roi2Goal;
    }

    /**
     * @param float $roi2Goal
     * @return self
     */
    public function setRoi2Goal(?float $roi2Goal): self
    {
        $this->roi2Goal = $roi2Goal;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingVideoScheduleType
     */
    public function getVideoScheduleType(): ?string
    {
        return $this->videoScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10DeliverySettingVideoScheduleType $videoScheduleType
     * @return self
     */
    public function setVideoScheduleType(?string $videoScheduleType): self
    {
        $this->videoScheduleType = $videoScheduleType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->dailyDeliveryTime !== null) {
            $result['daily_delivery_time'] = $this->dailyDeliveryTime;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->estimateConvert !== null) {
            $result['estimate_convert'] = $this->estimateConvert;
        }
        if ($this->estimateRoiGoal !== null) {
            $result['estimate_roi_goal'] = $this->estimateRoiGoal;
        }
        if ($this->liveScheduleType !== null) {
            $result['live_schedule_type'] = $this->liveScheduleType;
        }
        if ($this->minEstimateConvert !== null) {
            $result['min_estimate_convert'] = $this->minEstimateConvert;
        }
        if ($this->minEstimateRoiGoal !== null) {
            $result['min_estimate_roi_goal'] = $this->minEstimateRoiGoal;
        }
        if ($this->qcpxMode !== null) {
            $result['qcpx_mode'] = $this->qcpxMode;
        }
        if ($this->roi2Goal !== null) {
            $result['roi2_goal'] = $this->roi2Goal;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->videoScheduleType !== null) {
            $result['video_schedule_type'] = $this->videoScheduleType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['daily_delivery_time'] ?? null) !== null) {
            $obj->dailyDeliveryTime = (float) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['estimate_convert'] ?? null) !== null) {
            $obj->estimateConvert = (int) $v;
        }
        if (($v = $data['estimate_roi_goal'] ?? null) !== null) {
            $obj->estimateRoiGoal = (float) $v;
        }
        if (($v = $data['live_schedule_type'] ?? null) !== null) {
            $obj->liveScheduleType = (string) $v;
        }
        if (($v = $data['min_estimate_convert'] ?? null) !== null) {
            $obj->minEstimateConvert = (int) $v;
        }
        if (($v = $data['min_estimate_roi_goal'] ?? null) !== null) {
            $obj->minEstimateRoiGoal = (float) $v;
        }
        if (($v = $data['qcpx_mode'] ?? null) !== null) {
            $obj->qcpxMode = (string) $v;
        }
        if (($v = $data['roi2_goal'] ?? null) !== null) {
            $obj->roi2Goal = (float) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['video_schedule_type'] ?? null) !== null) {
            $obj->videoScheduleType = (string) $v;
        }
        return $obj;
    }
}
