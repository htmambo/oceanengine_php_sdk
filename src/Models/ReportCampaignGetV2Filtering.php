<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCampaignGetV2Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var int[]
     */
    protected ?array $campaignIds = null;

    /**
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringCampaignTypes[]
     */
    protected ?array $campaignTypes = null;

    /**
     * @var int[]
     */
    protected ?array $creativeIds = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringCreativeMaterialModes[]
     */
    protected ?array $creativeMaterialModes = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringDeliveryMode[]
     */
    protected ?array $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringImageModes[]
     */
    protected ?array $imageModes = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringInventoryTypes[]
     */
    protected ?array $inventoryTypes = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringLandingTypes[]
     */
    protected ?array $landingTypes = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringPricingCategories[]
     */
    protected ?array $pricingCategories = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringPricings[]
     */
    protected ?array $pricings = null;

    /**
     * @var \Oceanengine\Models\ReportCampaignGetV2FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCampaignIds(): ?array
    {
        return $this->campaignIds;
    }

    /**
     * @param int[] $campaignIds
     * @return self
     */
    public function setCampaignIds(?array $campaignIds): self
    {
        $this->campaignIds = $campaignIds;
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
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringCampaignTypes[]
     */
    public function getCampaignTypes(): ?array
    {
        return $this->campaignTypes;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringCampaignTypes[] $campaignTypes
     * @return self
     */
    public function setCampaignTypes(?array $campaignTypes): self
    {
        $this->campaignTypes = $campaignTypes;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCreativeIds(): ?array
    {
        return $this->creativeIds;
    }

    /**
     * @param int[] $creativeIds
     * @return self
     */
    public function setCreativeIds(?array $creativeIds): self
    {
        $this->creativeIds = $creativeIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringCreativeMaterialModes[]
     */
    public function getCreativeMaterialModes(): ?array
    {
        return $this->creativeMaterialModes;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringCreativeMaterialModes[] $creativeMaterialModes
     * @return self
     */
    public function setCreativeMaterialModes(?array $creativeMaterialModes): self
    {
        $this->creativeMaterialModes = $creativeMaterialModes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringDeliveryMode[]
     */
    public function getDeliveryMode(): ?array
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringDeliveryMode[] $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?array $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringImageModes[]
     */
    public function getImageModes(): ?array
    {
        return $this->imageModes;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringImageModes[] $imageModes
     * @return self
     */
    public function setImageModes(?array $imageModes): self
    {
        $this->imageModes = $imageModes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringInventoryTypes[]
     */
    public function getInventoryTypes(): ?array
    {
        return $this->inventoryTypes;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringInventoryTypes[] $inventoryTypes
     * @return self
     */
    public function setInventoryTypes(?array $inventoryTypes): self
    {
        $this->inventoryTypes = $inventoryTypes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringLandingTypes[]
     */
    public function getLandingTypes(): ?array
    {
        return $this->landingTypes;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringLandingTypes[] $landingTypes
     * @return self
     */
    public function setLandingTypes(?array $landingTypes): self
    {
        $this->landingTypes = $landingTypes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringPricingCategories[]
     */
    public function getPricingCategories(): ?array
    {
        return $this->pricingCategories;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringPricingCategories[] $pricingCategories
     * @return self
     */
    public function setPricingCategories(?array $pricingCategories): self
    {
        $this->pricingCategories = $pricingCategories;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringPricings[]
     */
    public function getPricings(): ?array
    {
        return $this->pricings;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringPricings[] $pricings
     * @return self
     */
    public function setPricings(?array $pricings): self
    {
        $this->pricings = $pricings;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCampaignGetV2FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ReportCampaignGetV2FilteringStatus $status
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
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->campaignIds !== null) {
            $result['campaign_ids'] = $this->campaignIds;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->campaignTypes !== null) {
            $result['campaign_types'] = $this->campaignTypes;
        }
        if ($this->creativeIds !== null) {
            $result['creative_ids'] = $this->creativeIds;
        }
        if ($this->creativeMaterialModes !== null) {
            $result['creative_material_modes'] = $this->creativeMaterialModes;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->imageModes !== null) {
            $result['image_modes'] = $this->imageModes;
        }
        if ($this->inventoryTypes !== null) {
            $result['inventory_types'] = $this->inventoryTypes;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->landingTypes !== null) {
            $result['landing_types'] = $this->landingTypes;
        }
        if ($this->pricingCategories !== null) {
            $result['pricing_categories'] = $this->pricingCategories;
        }
        if ($this->pricings !== null) {
            $result['pricings'] = $this->pricings;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['campaign_ids'] ?? null) !== null && is_array($v)) {
            $obj->campaignIds = $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['campaign_types'] ?? null) !== null && is_array($v)) {
            $obj->campaignTypes = $v;
        }
        if (($v = $data['creative_ids'] ?? null) !== null && is_array($v)) {
            $obj->creativeIds = $v;
        }
        if (($v = $data['creative_material_modes'] ?? null) !== null && is_array($v)) {
            $obj->creativeMaterialModes = $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null && is_array($v)) {
            $obj->deliveryMode = $v;
        }
        if (($v = $data['image_modes'] ?? null) !== null && is_array($v)) {
            $obj->imageModes = $v;
        }
        if (($v = $data['inventory_types'] ?? null) !== null && is_array($v)) {
            $obj->inventoryTypes = $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['landing_types'] ?? null) !== null && is_array($v)) {
            $obj->landingTypes = $v;
        }
        if (($v = $data['pricing_categories'] ?? null) !== null && is_array($v)) {
            $obj->pricingCategories = $v;
        }
        if (($v = $data['pricings'] ?? null) !== null && is_array($v)) {
            $obj->pricings = $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
