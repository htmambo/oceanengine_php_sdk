<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoAdlabScene
     */
    protected ?string $adlabScene = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfoCompensateInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfoCompensateInfo $compensateInfo = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var float
     */
    protected ?float $dailyDeliveryTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var int
     */
    protected ?int $deliverySeconds = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode
     */
    protected ?string $marketingServicesMode = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var float
     */
    protected ?float $roi2Goal = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoAdlabScene
     */
    public function getAdlabScene(): ?string
    {
        return $this->adlabScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoAdlabScene $adlabScene
     * @return self
     */
    public function setAdlabScene(?string $adlabScene): self
    {
        $this->adlabScene = $adlabScene;
        return $this;
    }

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
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfoCompensateInfo
     */
    public function getCompensateInfo(): ?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfoCompensateInfo
    {
        return $this->compensateInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfoCompensateInfo $compensateInfo
     * @return self
     */
    public function setCompensateInfo(?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfoCompensateInfo $compensateInfo): self
    {
        $this->compensateInfo = $compensateInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
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
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliverySeconds(): ?int
    {
        return $this->deliverySeconds;
    }

    /**
     * @param int $deliverySeconds
     * @return self
     */
    public function setDeliverySeconds(?int $deliverySeconds): self
    {
        $this->deliverySeconds = $deliverySeconds;
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
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode
     */
    public function getMarketingServicesMode(): ?string
    {
        return $this->marketingServicesMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode $marketingServicesMode
     * @return self
     */
    public function setMarketingServicesMode(?string $marketingServicesMode): self
    {
        $this->marketingServicesMode = $marketingServicesMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoOptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
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
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoSmartBidType $smartBidType
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
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adlabScene !== null) {
            $result['adlab_scene'] = $this->adlabScene;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->compensateInfo !== null) {
            $result['compensate_info'] = $this->compensateInfo;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->dailyDeliveryTime !== null) {
            $result['daily_delivery_time'] = $this->dailyDeliveryTime;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->deliverySeconds !== null) {
            $result['delivery_seconds'] = $this->deliverySeconds;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->marketingServicesMode !== null) {
            $result['marketing_services_mode'] = $this->marketingServicesMode;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
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
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adlab_scene'] ?? null) !== null) {
            $obj->adlabScene = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['compensate_info'] ?? null) !== null && is_array($v)) {
            $obj->compensateInfo = \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfoCompensateInfo::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['daily_delivery_time'] ?? null) !== null) {
            $obj->dailyDeliveryTime = (float) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['delivery_seconds'] ?? null) !== null) {
            $obj->deliverySeconds = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['marketing_services_mode'] ?? null) !== null) {
            $obj->marketingServicesMode = (string) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
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
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
