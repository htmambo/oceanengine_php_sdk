<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AsyncTaskCreateV2RequestTaskParamsFiltering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adId = null;

    /**
     * @var string[]
     */
    protected ?array $bidword = null;

    /**
     * @var int[]
     */
    protected ?array $campaignId = null;

    /**
     * @var string[]
     */
    protected ?array $campaignType = null;

    /**
     * @var string[]
     */
    protected ?array $convertType = null;

    /**
     * @var int[]
     */
    protected ?array $creativeId = null;

    /**
     * @var string[]
     */
    protected ?array $creativeMaterialMode = null;

    /**
     * @var string[]
     */
    protected ?array $imageMode = null;

    /**
     * @var string[]
     */
    protected ?array $inventoryType = null;

    /**
     * @var string[]
     */
    protected ?array $landingType = null;

    /**
     * @var string[]
     */
    protected ?array $platform = null;

    /**
     * @var string[]
     */
    protected ?array $pricing = null;

    /**
     * @var string[]
     */
    protected ?array $pricingCategory = null;

    /**
     * @var string[]
     */
    protected ?array $query = null;

    /**
     * @return int[]
     */
    public function getAdId(): ?array
    {
        return $this->adId;
    }

    /**
     * @param int[] $adId
     * @return self
     */
    public function setAdId(?array $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBidword(): ?array
    {
        return $this->bidword;
    }

    /**
     * @param string[] $bidword
     * @return self
     */
    public function setBidword(?array $bidword): self
    {
        $this->bidword = $bidword;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCampaignId(): ?array
    {
        return $this->campaignId;
    }

    /**
     * @param int[] $campaignId
     * @return self
     */
    public function setCampaignId(?array $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCampaignType(): ?array
    {
        return $this->campaignType;
    }

    /**
     * @param string[] $campaignType
     * @return self
     */
    public function setCampaignType(?array $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getConvertType(): ?array
    {
        return $this->convertType;
    }

    /**
     * @param string[] $convertType
     * @return self
     */
    public function setConvertType(?array $convertType): self
    {
        $this->convertType = $convertType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCreativeId(): ?array
    {
        return $this->creativeId;
    }

    /**
     * @param int[] $creativeId
     * @return self
     */
    public function setCreativeId(?array $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCreativeMaterialMode(): ?array
    {
        return $this->creativeMaterialMode;
    }

    /**
     * @param string[] $creativeMaterialMode
     * @return self
     */
    public function setCreativeMaterialMode(?array $creativeMaterialMode): self
    {
        $this->creativeMaterialMode = $creativeMaterialMode;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImageMode(): ?array
    {
        return $this->imageMode;
    }

    /**
     * @param string[] $imageMode
     * @return self
     */
    public function setImageMode(?array $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getInventoryType(): ?array
    {
        return $this->inventoryType;
    }

    /**
     * @param string[] $inventoryType
     * @return self
     */
    public function setInventoryType(?array $inventoryType): self
    {
        $this->inventoryType = $inventoryType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLandingType(): ?array
    {
        return $this->landingType;
    }

    /**
     * @param string[] $landingType
     * @return self
     */
    public function setLandingType(?array $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * @param string[] $platform
     * @return self
     */
    public function setPlatform(?array $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPricing(): ?array
    {
        return $this->pricing;
    }

    /**
     * @param string[] $pricing
     * @return self
     */
    public function setPricing(?array $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPricingCategory(): ?array
    {
        return $this->pricingCategory;
    }

    /**
     * @param string[] $pricingCategory
     * @return self
     */
    public function setPricingCategory(?array $pricingCategory): self
    {
        $this->pricingCategory = $pricingCategory;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getQuery(): ?array
    {
        return $this->query;
    }

    /**
     * @param string[] $query
     * @return self
     */
    public function setQuery(?array $query): self
    {
        $this->query = $query;
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
        if ($this->bidword !== null) {
            $result['bidword'] = $this->bidword;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignType !== null) {
            $result['campaign_type'] = $this->campaignType;
        }
        if ($this->convertType !== null) {
            $result['convert_type'] = $this->convertType;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->creativeMaterialMode !== null) {
            $result['creative_material_mode'] = $this->creativeMaterialMode;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->inventoryType !== null) {
            $result['inventory_type'] = $this->inventoryType;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
        }
        if ($this->pricingCategory !== null) {
            $result['pricing_category'] = $this->pricingCategory;
        }
        if ($this->query !== null) {
            $result['query'] = $this->query;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null && is_array($v)) {
            $obj->adId = $v;
        }
        if (($v = $data['bidword'] ?? null) !== null && is_array($v)) {
            $obj->bidword = $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null && is_array($v)) {
            $obj->campaignId = $v;
        }
        if (($v = $data['campaign_type'] ?? null) !== null && is_array($v)) {
            $obj->campaignType = $v;
        }
        if (($v = $data['convert_type'] ?? null) !== null && is_array($v)) {
            $obj->convertType = $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null && is_array($v)) {
            $obj->creativeId = $v;
        }
        if (($v = $data['creative_material_mode'] ?? null) !== null && is_array($v)) {
            $obj->creativeMaterialMode = $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null && is_array($v)) {
            $obj->imageMode = $v;
        }
        if (($v = $data['inventory_type'] ?? null) !== null && is_array($v)) {
            $obj->inventoryType = $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null && is_array($v)) {
            $obj->landingType = $v;
        }
        if (($v = $data['platform'] ?? null) !== null && is_array($v)) {
            $obj->platform = $v;
        }
        if (($v = $data['pricing'] ?? null) !== null && is_array($v)) {
            $obj->pricing = $v;
        }
        if (($v = $data['pricing_category'] ?? null) !== null && is_array($v)) {
            $obj->pricingCategory = $v;
        }
        if (($v = $data['query'] ?? null) !== null && is_array($v)) {
            $obj->query = $v;
        }
        return $obj;
    }
}
