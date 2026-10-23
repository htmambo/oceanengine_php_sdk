<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CampaignCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2BudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2CampaignBudgetOptimization
     */
    protected ?string $campaignBudgetOptimization = null;

    /**
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2CampaignType
     */
    protected ?string $campaignType = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2DedicateType
     */
    protected ?string $dedicateType = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2DeliveryMode
     */
    protected ?string $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2DeliveryRelatedNum
     */
    protected ?string $deliveryRelatedNum = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2LandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2MarketingPurpose
     */
    protected ?string $marketingPurpose = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2MarketingScene
     */
    protected ?string $marketingScene = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2Operation
     */
    protected ?string $operation = null;

    /**
     * @var int
     */
    protected ?int $optPermission = null;

    /**
     * @var \Oceanengine\Models\CampaignCreateV2SmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * @return \Oceanengine\Models\CampaignCreateV2BudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2BudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2CampaignBudgetOptimization
     */
    public function getCampaignBudgetOptimization(): ?string
    {
        return $this->campaignBudgetOptimization;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2CampaignBudgetOptimization $campaignBudgetOptimization
     * @return self
     */
    public function setCampaignBudgetOptimization(?string $campaignBudgetOptimization): self
    {
        $this->campaignBudgetOptimization = $campaignBudgetOptimization;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return self
     */
    public function setCampaignName(?string $campaignName): self
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2CampaignType
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2CampaignType $campaignType
     * @return self
     */
    public function setCampaignType(?string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2DedicateType
     */
    public function getDedicateType(): ?string
    {
        return $this->dedicateType;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2DedicateType $dedicateType
     * @return self
     */
    public function setDedicateType(?string $dedicateType): self
    {
        $this->dedicateType = $dedicateType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2DeliveryMode
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2DeliveryMode $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2DeliveryRelatedNum
     */
    public function getDeliveryRelatedNum(): ?string
    {
        return $this->deliveryRelatedNum;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2DeliveryRelatedNum $deliveryRelatedNum
     * @return self
     */
    public function setDeliveryRelatedNum(?string $deliveryRelatedNum): self
    {
        $this->deliveryRelatedNum = $deliveryRelatedNum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2LandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2LandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2MarketingPurpose
     */
    public function getMarketingPurpose(): ?string
    {
        return $this->marketingPurpose;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2MarketingPurpose $marketingPurpose
     * @return self
     */
    public function setMarketingPurpose(?string $marketingPurpose): self
    {
        $this->marketingPurpose = $marketingPurpose;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2MarketingScene
     */
    public function getMarketingScene(): ?string
    {
        return $this->marketingScene;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2MarketingScene $marketingScene
     * @return self
     */
    public function setMarketingScene(?string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2Operation
     */
    public function getOperation(): ?string
    {
        return $this->operation;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2Operation $operation
     * @return self
     */
    public function setOperation(?string $operation): self
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return int
     */
    public function getOptPermission(): ?int
    {
        return $this->optPermission;
    }

    /**
     * @param int $optPermission
     * @return self
     */
    public function setOptPermission(?int $optPermission): self
    {
        $this->optPermission = $optPermission;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignCreateV2SmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\CampaignCreateV2SmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
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
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->campaignBudgetOptimization !== null) {
            $result['campaign_budget_optimization'] = $this->campaignBudgetOptimization;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->campaignType !== null) {
            $result['campaign_type'] = $this->campaignType;
        }
        if ($this->dedicateType !== null) {
            $result['dedicate_type'] = $this->dedicateType;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->deliveryRelatedNum !== null) {
            $result['delivery_related_num'] = $this->deliveryRelatedNum;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->marketingPurpose !== null) {
            $result['marketing_purpose'] = $this->marketingPurpose;
        }
        if ($this->marketingScene !== null) {
            $result['marketing_scene'] = $this->marketingScene;
        }
        if ($this->operation !== null) {
            $result['operation'] = $this->operation;
        }
        if ($this->optPermission !== null) {
            $result['opt_permission'] = $this->optPermission;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['campaign_budget_optimization'] ?? null) !== null) {
            $obj->campaignBudgetOptimization = (string) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['campaign_type'] ?? null) !== null) {
            $obj->campaignType = (string) $v;
        }
        if (($v = $data['dedicate_type'] ?? null) !== null) {
            $obj->dedicateType = (string) $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null) {
            $obj->deliveryMode = (string) $v;
        }
        if (($v = $data['delivery_related_num'] ?? null) !== null) {
            $obj->deliveryRelatedNum = (string) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['marketing_purpose'] ?? null) !== null) {
            $obj->marketingPurpose = (string) $v;
        }
        if (($v = $data['marketing_scene'] ?? null) !== null) {
            $obj->marketingScene = (string) $v;
        }
        if (($v = $data['operation'] ?? null) !== null) {
            $obj->operation = (string) $v;
        }
        if (($v = $data['opt_permission'] ?? null) !== null) {
            $obj->optPermission = (int) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        return $obj;
    }
}
