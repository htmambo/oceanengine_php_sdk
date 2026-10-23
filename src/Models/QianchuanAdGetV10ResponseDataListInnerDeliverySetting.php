<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdGetV10ResponseDataListInnerDeliverySetting implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $allowQcpx = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingDeepBidType
     */
    protected ?string $deepBidType = null;

    /**
     * @var float
     */
    protected ?float $deepCpaBid = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var bool
     */
    protected ?bool $productNewOpen = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingQcpxMode
     */
    protected ?string $qcpxMode = null;

    /**
     * @var float
     */
    protected ?float $reviveBudget = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return bool
     */
    public function getAllowQcpx(): ?bool
    {
        return $this->allowQcpx;
    }

    /**
     * @param bool $allowQcpx
     * @return self
     */
    public function setAllowQcpx(?bool $allowQcpx): self
    {
        $this->allowQcpx = $allowQcpx;
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
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
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
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingDeepBidType
     */
    public function getDeepBidType(): ?string
    {
        return $this->deepBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingDeepBidType $deepBidType
     * @return self
     */
    public function setDeepBidType(?string $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeepCpaBid(): ?float
    {
        return $this->deepCpaBid;
    }

    /**
     * @param float $deepCpaBid
     * @return self
     */
    public function setDeepCpaBid(?float $deepCpaBid): self
    {
        $this->deepCpaBid = $deepCpaBid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingDeepExternalAction $deepExternalAction
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
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return bool
     */
    public function getProductNewOpen(): ?bool
    {
        return $this->productNewOpen;
    }

    /**
     * @param bool $productNewOpen
     * @return self
     */
    public function setProductNewOpen(?bool $productNewOpen): self
    {
        $this->productNewOpen = $productNewOpen;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingQcpxMode
     */
    public function getQcpxMode(): ?string
    {
        return $this->qcpxMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingQcpxMode $qcpxMode
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
    public function getReviveBudget(): ?float
    {
        return $this->reviveBudget;
    }

    /**
     * @param float $reviveBudget
     * @return self
     */
    public function setReviveBudget(?float $reviveBudget): self
    {
        $this->reviveBudget = $reviveBudget;
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
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListDeliverySettingSmartBidType $smartBidType
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allowQcpx !== null) {
            $result['allow_qcpx'] = $this->allowQcpx;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->deepBidType !== null) {
            $result['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->deepCpaBid !== null) {
            $result['deep_cpa_bid'] = $this->deepCpaBid;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->productNewOpen !== null) {
            $result['product_new_open'] = $this->productNewOpen;
        }
        if ($this->qcpxMode !== null) {
            $result['qcpx_mode'] = $this->qcpxMode;
        }
        if ($this->reviveBudget !== null) {
            $result['revive_budget'] = $this->reviveBudget;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_qcpx'] ?? null) !== null) {
            $obj->allowQcpx = (bool) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['deep_bid_type'] ?? null) !== null) {
            $obj->deepBidType = (string) $v;
        }
        if (($v = $data['deep_cpa_bid'] ?? null) !== null) {
            $obj->deepCpaBid = (float) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['product_new_open'] ?? null) !== null) {
            $obj->productNewOpen = (bool) $v;
        }
        if (($v = $data['qcpx_mode'] ?? null) !== null) {
            $obj->qcpxMode = (string) $v;
        }
        if (($v = $data['revive_budget'] ?? null) !== null) {
            $obj->reviveBudget = (float) $v;
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
