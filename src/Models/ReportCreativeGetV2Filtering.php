<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCreativeGetV2Filtering implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var string
     */
    protected ?string $adName = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var int[]
     */
    protected ?array $campaignIds = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringCampaignTypes[]
     */
    protected ?array $campaignTypes = null;

    /**
     * @var int[]
     */
    protected ?array $creativeIds = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringCreativeMaterialModes[]
     */
    protected ?array $creativeMaterialModes = null;

    /**
     * @var string
     */
    protected ?string $creativeTitle = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringDeliveryMode[]
     */
    protected ?array $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringImageModes[]
     */
    protected ?array $imageModes = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringInventoryTypes[]
     */
    protected ?array $inventoryTypes = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringLandingTypes[]
     */
    protected ?array $landingTypes = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringPricing
     */
    protected ?string $pricing = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringPricingCategories[]
     */
    protected ?array $pricingCategories = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringPricings[]
     */
    protected ?array $pricings = null;

    /**
     * @var \Oceanengine\Models\ReportCreativeGetV2FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

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
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
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
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringCampaignTypes[]
     */
    public function getCampaignTypes(): ?array
    {
        return $this->campaignTypes;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringCampaignTypes[] $campaignTypes
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
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringCreativeMaterialModes[]
     */
    public function getCreativeMaterialModes(): ?array
    {
        return $this->creativeMaterialModes;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringCreativeMaterialModes[] $creativeMaterialModes
     * @return self
     */
    public function setCreativeMaterialModes(?array $creativeMaterialModes): self
    {
        $this->creativeMaterialModes = $creativeMaterialModes;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreativeTitle(): ?string
    {
        return $this->creativeTitle;
    }

    /**
     * @param string $creativeTitle
     * @return self
     */
    public function setCreativeTitle(?string $creativeTitle): self
    {
        $this->creativeTitle = $creativeTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringDeliveryMode[]
     */
    public function getDeliveryMode(): ?array
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringDeliveryMode[] $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?array $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringImageModes[]
     */
    public function getImageModes(): ?array
    {
        return $this->imageModes;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringImageModes[] $imageModes
     * @return self
     */
    public function setImageModes(?array $imageModes): self
    {
        $this->imageModes = $imageModes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringInventoryTypes[]
     */
    public function getInventoryTypes(): ?array
    {
        return $this->inventoryTypes;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringInventoryTypes[] $inventoryTypes
     * @return self
     */
    public function setInventoryTypes(?array $inventoryTypes): self
    {
        $this->inventoryTypes = $inventoryTypes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringLandingTypes[]
     */
    public function getLandingTypes(): ?array
    {
        return $this->landingTypes;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringLandingTypes[] $landingTypes
     * @return self
     */
    public function setLandingTypes(?array $landingTypes): self
    {
        $this->landingTypes = $landingTypes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringPricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringPricingCategories[]
     */
    public function getPricingCategories(): ?array
    {
        return $this->pricingCategories;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringPricingCategories[] $pricingCategories
     * @return self
     */
    public function setPricingCategories(?array $pricingCategories): self
    {
        $this->pricingCategories = $pricingCategories;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringPricings[]
     */
    public function getPricings(): ?array
    {
        return $this->pricings;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringPricings[] $pricings
     * @return self
     */
    public function setPricings(?array $pricings): self
    {
        $this->pricings = $pricings;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportCreativeGetV2FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ReportCreativeGetV2FilteringStatus $status
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
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignIds !== null) {
            $result['campaign_ids'] = $this->campaignIds;
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
        if ($this->creativeTitle !== null) {
            $result['creative_title'] = $this->creativeTitle;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
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
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
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
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_ids'] ?? null) !== null && is_array($v)) {
            $obj->campaignIds = $v;
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
        if (($v = $data['creative_title'] ?? null) !== null) {
            $obj->creativeTitle = (string) $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null && is_array($v)) {
            $obj->deliveryMode = $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
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
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
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
