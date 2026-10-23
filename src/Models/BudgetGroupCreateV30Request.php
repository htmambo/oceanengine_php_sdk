<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BudgetGroupCreateV30Request implements \JsonSerializable
{
    /**
     * 广告主 ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 日预算，单位：元，范围：[300，9,999,999]，预算组中的每个项目在实际消耗时，以【项目、预算组】中较低预算为准
     * @var float
     */
    protected ?float $budgetGroupBudget = null;

    /**
     * 预算组名称，50个字以内，预算组之间名称不可重复，不可为空
     * @var string
     */
    protected ?string $budgetGroupName = null;

    /**
     * @var \Oceanengine\Models\BudgetGroupCreateV30CampaignType
     */
    protected ?string $campaignType = null;

    /**
     * @var \Oceanengine\Models\BudgetGroupCreateV30DeliveryMode
     */
    protected ?string $deliveryMode = null;

    /**
     * 广告主 ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主 ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 日预算，单位：元，范围：[300，9,999,999]，预算组中的每个项目在实际消耗时，以【项目、预算组】中较低预算为准
     * @return float
     */
    public function getBudgetGroupBudget(): ?float
    {
        return $this->budgetGroupBudget;
    }

    /**
     * 日预算，单位：元，范围：[300，9,999,999]，预算组中的每个项目在实际消耗时，以【项目、预算组】中较低预算为准
     * @param float $budgetGroupBudget
     * @return self
     */
    public function setBudgetGroupBudget(?float $budgetGroupBudget): self
    {
        $this->budgetGroupBudget = $budgetGroupBudget;
        return $this;
    }

    /**
     * 预算组名称，50个字以内，预算组之间名称不可重复，不可为空
     * @return string
     */
    public function getBudgetGroupName(): ?string
    {
        return $this->budgetGroupName;
    }

    /**
     * 预算组名称，50个字以内，预算组之间名称不可重复，不可为空
     * @param string $budgetGroupName
     * @return self
     */
    public function setBudgetGroupName(?string $budgetGroupName): self
    {
        $this->budgetGroupName = $budgetGroupName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BudgetGroupCreateV30CampaignType
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupCreateV30CampaignType $campaignType
     * @return self
     */
    public function setCampaignType(?string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BudgetGroupCreateV30DeliveryMode
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\BudgetGroupCreateV30DeliveryMode $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->budgetGroupBudget !== null) {
            $result['budget_group_budget'] = $this->budgetGroupBudget;
        }
        if ($this->budgetGroupName !== null) {
            $result['budget_group_name'] = $this->budgetGroupName;
        }
        if ($this->campaignType !== null) {
            $result['campaign_type'] = $this->campaignType;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['budget_group_budget'] ?? null) !== null) {
            $obj->budgetGroupBudget = (float) $v;
        }
        if (($v = $data['budget_group_name'] ?? null) !== null) {
            $obj->budgetGroupName = (string) $v;
        }
        if (($v = $data['campaign_type'] ?? null) !== null) {
            $obj->campaignType = (string) $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null) {
            $obj->deliveryMode = (string) $v;
        }
        return $obj;
    }
}
