<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdUpdateV10RequestDeliverySetting implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 抢首屏ROI目标降低幅度
     * @var int
     */
    protected ?int $grabFirstScreenBidAdjustRate = null;

    /**
     * 抢首屏开关
     * @var bool
     */
    protected ?bool $grabFirstScreenSwitch = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10DeliverySettingLiveScheduleType
     */
    protected ?string $liveScheduleType = null;

    /**
     * 新品链路
     * @var bool
     */
    protected ?bool $productNewOpen = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10DeliverySettingQcpxMode
     */
    protected ?string $qcpxMode = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var int
     */
    protected ?int $scheduleFixedRange = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10DeliverySettingVideoScheduleType
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
     * 抢首屏ROI目标降低幅度
     * @return int
     */
    public function getGrabFirstScreenBidAdjustRate(): ?int
    {
        return $this->grabFirstScreenBidAdjustRate;
    }

    /**
     * 抢首屏ROI目标降低幅度
     * @param int $grabFirstScreenBidAdjustRate
     * @return self
     */
    public function setGrabFirstScreenBidAdjustRate(?int $grabFirstScreenBidAdjustRate): self
    {
        $this->grabFirstScreenBidAdjustRate = $grabFirstScreenBidAdjustRate;
        return $this;
    }

    /**
     * 抢首屏开关
     * @return bool
     */
    public function getGrabFirstScreenSwitch(): ?bool
    {
        return $this->grabFirstScreenSwitch;
    }

    /**
     * 抢首屏开关
     * @param bool $grabFirstScreenSwitch
     * @return self
     */
    public function setGrabFirstScreenSwitch(?bool $grabFirstScreenSwitch): self
    {
        $this->grabFirstScreenSwitch = $grabFirstScreenSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10DeliverySettingLiveScheduleType
     */
    public function getLiveScheduleType(): ?string
    {
        return $this->liveScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10DeliverySettingLiveScheduleType $liveScheduleType
     * @return self
     */
    public function setLiveScheduleType(?string $liveScheduleType): self
    {
        $this->liveScheduleType = $liveScheduleType;
        return $this;
    }

    /**
     * 新品链路
     * @return bool
     */
    public function getProductNewOpen(): ?bool
    {
        return $this->productNewOpen;
    }

    /**
     * 新品链路
     * @param bool $productNewOpen
     * @return self
     */
    public function setProductNewOpen(?bool $productNewOpen): self
    {
        $this->productNewOpen = $productNewOpen;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10DeliverySettingQcpxMode
     */
    public function getQcpxMode(): ?string
    {
        return $this->qcpxMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10DeliverySettingQcpxMode $qcpxMode
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
     * @return int
     */
    public function getScheduleFixedRange(): ?int
    {
        return $this->scheduleFixedRange;
    }

    /**
     * @param int $scheduleFixedRange
     * @return self
     */
    public function setScheduleFixedRange(?int $scheduleFixedRange): self
    {
        $this->scheduleFixedRange = $scheduleFixedRange;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
     * @param string $scheduleTime
     * @return self
     */
    public function setScheduleTime(?string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10DeliverySettingVideoScheduleType
     */
    public function getVideoScheduleType(): ?string
    {
        return $this->videoScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10DeliverySettingVideoScheduleType $videoScheduleType
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
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->grabFirstScreenBidAdjustRate !== null) {
            $result['grab_first_screen_bid_adjust_rate'] = $this->grabFirstScreenBidAdjustRate;
        }
        if ($this->grabFirstScreenSwitch !== null) {
            $result['grab_first_screen_switch'] = $this->grabFirstScreenSwitch;
        }
        if ($this->liveScheduleType !== null) {
            $result['live_schedule_type'] = $this->liveScheduleType;
        }
        if ($this->productNewOpen !== null) {
            $result['product_new_open'] = $this->productNewOpen;
        }
        if ($this->qcpxMode !== null) {
            $result['qcpx_mode'] = $this->qcpxMode;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->scheduleFixedRange !== null) {
            $result['schedule_fixed_range'] = $this->scheduleFixedRange;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
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
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['grab_first_screen_bid_adjust_rate'] ?? null) !== null) {
            $obj->grabFirstScreenBidAdjustRate = (int) $v;
        }
        if (($v = $data['grab_first_screen_switch'] ?? null) !== null) {
            $obj->grabFirstScreenSwitch = (bool) $v;
        }
        if (($v = $data['live_schedule_type'] ?? null) !== null) {
            $obj->liveScheduleType = (string) $v;
        }
        if (($v = $data['product_new_open'] ?? null) !== null) {
            $obj->productNewOpen = (bool) $v;
        }
        if (($v = $data['qcpx_mode'] ?? null) !== null) {
            $obj->qcpxMode = (string) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['schedule_fixed_range'] ?? null) !== null) {
            $obj->scheduleFixedRange = (int) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['video_schedule_type'] ?? null) !== null) {
            $obj->videoScheduleType = (string) $v;
        }
        return $obj;
    }
}
