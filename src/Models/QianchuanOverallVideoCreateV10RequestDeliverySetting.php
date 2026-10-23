<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallVideoCreateV10RequestDeliverySetting implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * AIGC 动态创意
     * @var bool
     */
    protected ?bool $enableAigcCreative = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 乘方无号投商城
     * @var bool
     */
    protected ?bool $noAwemeId = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySettingOverallCostItems
     */
    protected ?\Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySettingOverallCostItems $overallCostItems = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingQcpxMode
     */
    protected ?string $qcpxMode = null;

    /**
     * @var float
     */
    protected ?float $roi2Goal = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingVideoScheduleType
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
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * AIGC 动态创意
     * @return bool
     */
    public function getEnableAigcCreative(): ?bool
    {
        return $this->enableAigcCreative;
    }

    /**
     * AIGC 动态创意
     * @param bool $enableAigcCreative
     * @return self
     */
    public function setEnableAigcCreative(?bool $enableAigcCreative): self
    {
        $this->enableAigcCreative = $enableAigcCreative;
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
     * 乘方无号投商城
     * @return bool
     */
    public function getNoAwemeId(): ?bool
    {
        return $this->noAwemeId;
    }

    /**
     * 乘方无号投商城
     * @param bool $noAwemeId
     * @return self
     */
    public function setNoAwemeId(?bool $noAwemeId): self
    {
        $this->noAwemeId = $noAwemeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySettingOverallCostItems
     */
    public function getOverallCostItems(): ?\Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySettingOverallCostItems
    {
        return $this->overallCostItems;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySettingOverallCostItems $overallCostItems
     * @return self
     */
    public function setOverallCostItems(?\Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySettingOverallCostItems $overallCostItems): self
    {
        $this->overallCostItems = $overallCostItems;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingQcpxMode
     */
    public function getQcpxMode(): ?string
    {
        return $this->qcpxMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingQcpxMode $qcpxMode
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
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
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
     * @return \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingVideoScheduleType
     */
    public function getVideoScheduleType(): ?string
    {
        return $this->videoScheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallVideoCreateV10DeliverySettingVideoScheduleType $videoScheduleType
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
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->enableAigcCreative !== null) {
            $result['enable_aigc_creative'] = $this->enableAigcCreative;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->noAwemeId !== null) {
            $result['no_aweme_id'] = $this->noAwemeId;
        }
        if ($this->overallCostItems !== null) {
            $result['overall_cost_items'] = $this->overallCostItems;
        }
        if ($this->qcpxMode !== null) {
            $result['qcpx_mode'] = $this->qcpxMode;
        }
        if ($this->roi2Goal !== null) {
            $result['roi2_goal'] = $this->roi2Goal;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
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
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['enable_aigc_creative'] ?? null) !== null) {
            $obj->enableAigcCreative = (bool) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['no_aweme_id'] ?? null) !== null) {
            $obj->noAwemeId = (bool) $v;
        }
        if (($v = $data['overall_cost_items'] ?? null) !== null && is_array($v)) {
            $obj->overallCostItems = \Oceanengine\Models\QianchuanOverallVideoCreateV10RequestDeliverySettingOverallCostItems::fromArray($v);
        }
        if (($v = $data['qcpx_mode'] ?? null) !== null) {
            $obj->qcpxMode = (string) $v;
        }
        if (($v = $data['roi2_goal'] ?? null) !== null) {
            $obj->roi2Goal = (float) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
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
