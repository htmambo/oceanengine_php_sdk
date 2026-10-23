<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CampaignGetV2ResponseDataListInner implements \JsonSerializable
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
     * @var \Oceanengine\Models\CampaignGetV2DataListBudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListCampaignBudgetOptimization
     */
    protected ?string $campaignBudgetOptimization = null;

    /**
     * @var string
     */
    protected ?string $campaignCreateTime = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var string
     */
    protected ?string $campaignModifyTime = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListCampaignType
     */
    protected ?string $campaignType = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListDedicateType
     */
    protected ?string $dedicateType = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListDeliveryMode
     */
    protected ?string $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListDeliveryRelatedNum
     */
    protected ?string $deliveryRelatedNum = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListMarketingPurpose
     */
    protected ?string $marketingPurpose = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListMarketingScene
     */
    protected ?string $marketingScene = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2DataListStatus
     */
    protected ?string $status = null;

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
     * @return \Oceanengine\Models\CampaignGetV2DataListBudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListBudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2DataListCampaignBudgetOptimization
     */
    public function getCampaignBudgetOptimization(): ?string
    {
        return $this->campaignBudgetOptimization;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListCampaignBudgetOptimization $campaignBudgetOptimization
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
    public function getCampaignCreateTime(): ?string
    {
        return $this->campaignCreateTime;
    }

    /**
     * @param string $campaignCreateTime
     * @return self
     */
    public function setCampaignCreateTime(?string $campaignCreateTime): self
    {
        $this->campaignCreateTime = $campaignCreateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignModifyTime(): ?string
    {
        return $this->campaignModifyTime;
    }

    /**
     * @param string $campaignModifyTime
     * @return self
     */
    public function setCampaignModifyTime(?string $campaignModifyTime): self
    {
        $this->campaignModifyTime = $campaignModifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2DataListCampaignType
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListCampaignType $campaignType
     * @return self
     */
    public function setCampaignType(?string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2DataListDedicateType
     */
    public function getDedicateType(): ?string
    {
        return $this->dedicateType;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListDedicateType $dedicateType
     * @return self
     */
    public function setDedicateType(?string $dedicateType): self
    {
        $this->dedicateType = $dedicateType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2DataListDeliveryMode
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListDeliveryMode $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2DataListDeliveryRelatedNum
     */
    public function getDeliveryRelatedNum(): ?string
    {
        return $this->deliveryRelatedNum;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListDeliveryRelatedNum $deliveryRelatedNum
     * @return self
     */
    public function setDeliveryRelatedNum(?string $deliveryRelatedNum): self
    {
        $this->deliveryRelatedNum = $deliveryRelatedNum;
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
     * @return \Oceanengine\Models\CampaignGetV2DataListLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2DataListMarketingPurpose
     */
    public function getMarketingPurpose(): ?string
    {
        return $this->marketingPurpose;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListMarketingPurpose $marketingPurpose
     * @return self
     */
    public function setMarketingPurpose(?string $marketingPurpose): self
    {
        $this->marketingPurpose = $marketingPurpose;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2DataListMarketingScene
     */
    public function getMarketingScene(): ?string
    {
        return $this->marketingScene;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListMarketingScene $marketingScene
     * @return self
     */
    public function setMarketingScene(?string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
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
     * @return \Oceanengine\Models\CampaignGetV2DataListSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2DataListStatus $status
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
        if ($this->campaignCreateTime !== null) {
            $result['campaign_create_time'] = $this->campaignCreateTime;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignModifyTime !== null) {
            $result['campaign_modify_time'] = $this->campaignModifyTime;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
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
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
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
        if (($v = $data['campaign_create_time'] ?? null) !== null) {
            $obj->campaignCreateTime = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_modify_time'] ?? null) !== null) {
            $obj->campaignModifyTime = (string) $v;
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
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
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
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
