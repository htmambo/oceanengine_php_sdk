<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30RequestAudience
     */
    protected ?\Oceanengine\Models\ProjectUpdateV30RequestAudience $audience = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceExtend
     */
    protected ?string $audienceExtend = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AutoExtendTraffic
     */
    protected ?string $autoExtendTraffic = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30RequestBlueFlowPackage
     */
    protected ?\Oceanengine\Models\ProjectUpdateV30RequestBlueFlowPackage $blueFlowPackage = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\ProjectUpdateV30RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30DownloadMode
     */
    protected ?string $downloadMode = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30RequestDpaProductTargetInner[]
     */
    protected ?array $dpaProductTarget = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30RequestKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * @var string
     */
    protected ?string $openUrlField = null;

    /**
     * @var string
     */
    protected ?string $openUrlParams = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30RequestRelatedProduct
     */
    protected ?\Oceanengine\Models\ProjectUpdateV30RequestRelatedProduct $relatedProduct = null;

    /**
     * @var float
     */
    protected ?float $searchBidRatio = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30StarAutoDeliverySwitch
     */
    protected ?string $starAutoDeliverySwitch = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30StarAutoMaterialAdditionSwitch
     */
    protected ?string $starAutoMaterialAdditionSwitch = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30RequestTrackUrlSetting
     */
    protected ?\Oceanengine\Models\ProjectUpdateV30RequestTrackUrlSetting $trackUrlSetting = null;

    /**
     * @var string
     */
    protected ?string $ulinkUrl = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30UlinkUrlType
     */
    protected ?string $ulinkUrlType = null;

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
     * @return \Oceanengine\Models\ProjectUpdateV30AigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\ProjectUpdateV30RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\ProjectUpdateV30RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceExtend
     */
    public function getAudienceExtend(): ?string
    {
        return $this->audienceExtend;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceExtend $audienceExtend
     * @return self
     */
    public function setAudienceExtend(?string $audienceExtend): self
    {
        $this->audienceExtend = $audienceExtend;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AutoExtendTraffic
     */
    public function getAutoExtendTraffic(): ?string
    {
        return $this->autoExtendTraffic;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AutoExtendTraffic $autoExtendTraffic
     * @return self
     */
    public function setAutoExtendTraffic(?string $autoExtendTraffic): self
    {
        $this->autoExtendTraffic = $autoExtendTraffic;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30RequestBlueFlowPackage
     */
    public function getBlueFlowPackage(): ?\Oceanengine\Models\ProjectUpdateV30RequestBlueFlowPackage
    {
        return $this->blueFlowPackage;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30RequestBlueFlowPackage $blueFlowPackage
     * @return self
     */
    public function setBlueFlowPackage(?\Oceanengine\Models\ProjectUpdateV30RequestBlueFlowPackage $blueFlowPackage): self
    {
        $this->blueFlowPackage = $blueFlowPackage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\ProjectUpdateV30RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\ProjectUpdateV30RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30DownloadMode
     */
    public function getDownloadMode(): ?string
    {
        return $this->downloadMode;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30DownloadMode $downloadMode
     * @return self
     */
    public function setDownloadMode(?string $downloadMode): self
    {
        $this->downloadMode = $downloadMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30RequestDpaProductTargetInner[]
     */
    public function getDpaProductTarget(): ?array
    {
        return $this->dpaProductTarget;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30RequestDpaProductTargetInner[] $dpaProductTarget
     * @return self
     */
    public function setDpaProductTarget(?array $dpaProductTarget): self
    {
        $this->dpaProductTarget = $dpaProductTarget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30RequestKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30RequestKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
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
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrlField(): ?string
    {
        return $this->openUrlField;
    }

    /**
     * @param string $openUrlField
     * @return self
     */
    public function setOpenUrlField(?string $openUrlField): self
    {
        $this->openUrlField = $openUrlField;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrlParams(): ?string
    {
        return $this->openUrlParams;
    }

    /**
     * @param string $openUrlParams
     * @return self
     */
    public function setOpenUrlParams(?string $openUrlParams): self
    {
        $this->openUrlParams = $openUrlParams;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30RequestRelatedProduct
     */
    public function getRelatedProduct(): ?\Oceanengine\Models\ProjectUpdateV30RequestRelatedProduct
    {
        return $this->relatedProduct;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30RequestRelatedProduct $relatedProduct
     * @return self
     */
    public function setRelatedProduct(?\Oceanengine\Models\ProjectUpdateV30RequestRelatedProduct $relatedProduct): self
    {
        $this->relatedProduct = $relatedProduct;
        return $this;
    }

    /**
     * @return float
     */
    public function getSearchBidRatio(): ?float
    {
        return $this->searchBidRatio;
    }

    /**
     * @param float $searchBidRatio
     * @return self
     */
    public function setSearchBidRatio(?float $searchBidRatio): self
    {
        $this->searchBidRatio = $searchBidRatio;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30StarAutoDeliverySwitch
     */
    public function getStarAutoDeliverySwitch(): ?string
    {
        return $this->starAutoDeliverySwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30StarAutoDeliverySwitch $starAutoDeliverySwitch
     * @return self
     */
    public function setStarAutoDeliverySwitch(?string $starAutoDeliverySwitch): self
    {
        $this->starAutoDeliverySwitch = $starAutoDeliverySwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30StarAutoMaterialAdditionSwitch
     */
    public function getStarAutoMaterialAdditionSwitch(): ?string
    {
        return $this->starAutoMaterialAdditionSwitch;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30StarAutoMaterialAdditionSwitch $starAutoMaterialAdditionSwitch
     * @return self
     */
    public function setStarAutoMaterialAdditionSwitch(?string $starAutoMaterialAdditionSwitch): self
    {
        $this->starAutoMaterialAdditionSwitch = $starAutoMaterialAdditionSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30RequestTrackUrlSetting
     */
    public function getTrackUrlSetting(): ?\Oceanengine\Models\ProjectUpdateV30RequestTrackUrlSetting
    {
        return $this->trackUrlSetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30RequestTrackUrlSetting $trackUrlSetting
     * @return self
     */
    public function setTrackUrlSetting(?\Oceanengine\Models\ProjectUpdateV30RequestTrackUrlSetting $trackUrlSetting): self
    {
        $this->trackUrlSetting = $trackUrlSetting;
        return $this;
    }

    /**
     * @return string
     */
    public function getUlinkUrl(): ?string
    {
        return $this->ulinkUrl;
    }

    /**
     * @param string $ulinkUrl
     * @return self
     */
    public function setUlinkUrl(?string $ulinkUrl): self
    {
        $this->ulinkUrl = $ulinkUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30UlinkUrlType
     */
    public function getUlinkUrlType(): ?string
    {
        return $this->ulinkUrlType;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30UlinkUrlType $ulinkUrlType
     * @return self
     */
    public function setUlinkUrlType(?string $ulinkUrlType): self
    {
        $this->ulinkUrlType = $ulinkUrlType;
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
        if ($this->aigcDynamicCreativeSwitch !== null) {
            $result['aigc_dynamic_creative_switch'] = $this->aigcDynamicCreativeSwitch;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->audienceExtend !== null) {
            $result['audience_extend'] = $this->audienceExtend;
        }
        if ($this->autoExtendTraffic !== null) {
            $result['auto_extend_traffic'] = $this->autoExtendTraffic;
        }
        if ($this->blueFlowPackage !== null) {
            $result['blue_flow_package'] = $this->blueFlowPackage;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->downloadMode !== null) {
            $result['download_mode'] = $this->downloadMode;
        }
        if ($this->dpaProductTarget !== null) {
            $result['dpa_product_target'] = $this->dpaProductTarget;
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->openUrlField !== null) {
            $result['open_url_field'] = $this->openUrlField;
        }
        if ($this->openUrlParams !== null) {
            $result['open_url_params'] = $this->openUrlParams;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->relatedProduct !== null) {
            $result['related_product'] = $this->relatedProduct;
        }
        if ($this->searchBidRatio !== null) {
            $result['search_bid_ratio'] = $this->searchBidRatio;
        }
        if ($this->starAutoDeliverySwitch !== null) {
            $result['star_auto_delivery_switch'] = $this->starAutoDeliverySwitch;
        }
        if ($this->starAutoMaterialAdditionSwitch !== null) {
            $result['star_auto_material_addition_switch'] = $this->starAutoMaterialAdditionSwitch;
        }
        if ($this->trackUrlSetting !== null) {
            $result['track_url_setting'] = $this->trackUrlSetting;
        }
        if ($this->ulinkUrl !== null) {
            $result['ulink_url'] = $this->ulinkUrl;
        }
        if ($this->ulinkUrlType !== null) {
            $result['ulink_url_type'] = $this->ulinkUrlType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aigc_dynamic_creative_switch'] ?? null) !== null) {
            $obj->aigcDynamicCreativeSwitch = (string) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\ProjectUpdateV30RequestAudience::fromArray($v);
        }
        if (($v = $data['audience_extend'] ?? null) !== null) {
            $obj->audienceExtend = (string) $v;
        }
        if (($v = $data['auto_extend_traffic'] ?? null) !== null) {
            $obj->autoExtendTraffic = (string) $v;
        }
        if (($v = $data['blue_flow_package'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowPackage = \Oceanengine\Models\ProjectUpdateV30RequestBlueFlowPackage::fromArray($v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\ProjectUpdateV30RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['download_mode'] ?? null) !== null) {
            $obj->downloadMode = (string) $v;
        }
        if (($v = $data['dpa_product_target'] ?? null) !== null && is_array($v)) {
            $obj->dpaProductTarget = array_map(fn ($vv) => \Oceanengine\Models\ProjectUpdateV30RequestDpaProductTargetInner::fromArray($vv), $v);
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\ProjectUpdateV30RequestKeywordsInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['open_url_field'] ?? null) !== null) {
            $obj->openUrlField = (string) $v;
        }
        if (($v = $data['open_url_params'] ?? null) !== null) {
            $obj->openUrlParams = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['related_product'] ?? null) !== null && is_array($v)) {
            $obj->relatedProduct = \Oceanengine\Models\ProjectUpdateV30RequestRelatedProduct::fromArray($v);
        }
        if (($v = $data['search_bid_ratio'] ?? null) !== null) {
            $obj->searchBidRatio = (float) $v;
        }
        if (($v = $data['star_auto_delivery_switch'] ?? null) !== null) {
            $obj->starAutoDeliverySwitch = (string) $v;
        }
        if (($v = $data['star_auto_material_addition_switch'] ?? null) !== null) {
            $obj->starAutoMaterialAdditionSwitch = (string) $v;
        }
        if (($v = $data['track_url_setting'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlSetting = \Oceanengine\Models\ProjectUpdateV30RequestTrackUrlSetting::fromArray($v);
        }
        if (($v = $data['ulink_url'] ?? null) !== null) {
            $obj->ulinkUrl = (string) $v;
        }
        if (($v = $data['ulink_url_type'] ?? null) !== null) {
            $obj->ulinkUrlType = (string) $v;
        }
        return $obj;
    }
}
