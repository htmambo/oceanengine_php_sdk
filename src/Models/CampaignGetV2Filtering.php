<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CampaignGetV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CampaignGetV2FilteringCampaignBudgetOptimization
     */
    protected ?string $campaignBudgetOptimization = null;

    /**
     * @var string
     */
    protected ?string $campaignCreateTime = null;

    /**
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2FilteringDedicateType
     */
    protected ?string $dedicateType = null;

    /**
     * @var int[]
     */
    protected ?array $ids = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2FilteringLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2FilteringSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var \Oceanengine\Models\CampaignGetV2FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\CampaignGetV2FilteringCampaignBudgetOptimization
     */
    public function getCampaignBudgetOptimization(): ?string
    {
        return $this->campaignBudgetOptimization;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2FilteringCampaignBudgetOptimization $campaignBudgetOptimization
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
     * @return \Oceanengine\Models\CampaignGetV2FilteringDedicateType
     */
    public function getDedicateType(): ?string
    {
        return $this->dedicateType;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2FilteringDedicateType $dedicateType
     * @return self
     */
    public function setDedicateType(?string $dedicateType): self
    {
        $this->dedicateType = $dedicateType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * @param int[] $ids
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2FilteringLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2FilteringLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2FilteringSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2FilteringSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignGetV2FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\CampaignGetV2FilteringStatus $status
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
        if ($this->campaignBudgetOptimization !== null) {
            $result['campaign_budget_optimization'] = $this->campaignBudgetOptimization;
        }
        if ($this->campaignCreateTime !== null) {
            $result['campaign_create_time'] = $this->campaignCreateTime;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->dedicateType !== null) {
            $result['dedicate_type'] = $this->dedicateType;
        }
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
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
        if (($v = $data['campaign_budget_optimization'] ?? null) !== null) {
            $obj->campaignBudgetOptimization = (string) $v;
        }
        if (($v = $data['campaign_create_time'] ?? null) !== null) {
            $obj->campaignCreateTime = (string) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['dedicate_type'] ?? null) !== null) {
            $obj->dedicateType = (string) $v;
        }
        if (($v = $data['ids'] ?? null) !== null && is_array($v)) {
            $obj->ids = $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
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
