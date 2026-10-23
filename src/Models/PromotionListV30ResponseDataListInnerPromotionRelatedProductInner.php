<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerPromotionRelatedProductInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerAnchorMaterialListInner[]
     */
    protected ?array $anchorMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductAnchorRelatedType
     */
    protected ?string $anchorRelatedType = null;

    /**
     * @var string[]
     */
    protected ?array $callToActionButtons = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerComponentMaterialListInner[]
     */
    protected ?array $componentMaterialList = null;

    /**
     * @var string[]
     */
    protected ?array $externalUrlMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerImageMaterialListInner[]
     */
    protected ?array $imageMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductIntelligentGeneration
     */
    protected ?string $intelligentGeneration = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * @var string
     */
    protected ?string $ulink = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductUlinkType
     */
    protected ?string $ulinkType = null;

    /**
     * @var int
     */
    protected ?int $uniqueProductId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerVideoMaterialListInner[]
     */
    protected ?array $videoMaterialList = null;

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerAnchorMaterialListInner[]
     */
    public function getAnchorMaterialList(): ?array
    {
        return $this->anchorMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerAnchorMaterialListInner[] $anchorMaterialList
     * @return self
     */
    public function setAnchorMaterialList(?array $anchorMaterialList): self
    {
        $this->anchorMaterialList = $anchorMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductAnchorRelatedType
     */
    public function getAnchorRelatedType(): ?string
    {
        return $this->anchorRelatedType;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductAnchorRelatedType $anchorRelatedType
     * @return self
     */
    public function setAnchorRelatedType(?string $anchorRelatedType): self
    {
        $this->anchorRelatedType = $anchorRelatedType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCallToActionButtons(): ?array
    {
        return $this->callToActionButtons;
    }

    /**
     * @param string[] $callToActionButtons
     * @return self
     */
    public function setCallToActionButtons(?array $callToActionButtons): self
    {
        $this->callToActionButtons = $callToActionButtons;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerComponentMaterialListInner[]
     */
    public function getComponentMaterialList(): ?array
    {
        return $this->componentMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerComponentMaterialListInner[] $componentMaterialList
     * @return self
     */
    public function setComponentMaterialList(?array $componentMaterialList): self
    {
        $this->componentMaterialList = $componentMaterialList;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getExternalUrlMaterialList(): ?array
    {
        return $this->externalUrlMaterialList;
    }

    /**
     * @param string[] $externalUrlMaterialList
     * @return self
     */
    public function setExternalUrlMaterialList(?array $externalUrlMaterialList): self
    {
        $this->externalUrlMaterialList = $externalUrlMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerImageMaterialListInner[]
     */
    public function getImageMaterialList(): ?array
    {
        return $this->imageMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerImageMaterialListInner[] $imageMaterialList
     * @return self
     */
    public function setImageMaterialList(?array $imageMaterialList): self
    {
        $this->imageMaterialList = $imageMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductIntelligentGeneration
     */
    public function getIntelligentGeneration(): ?string
    {
        return $this->intelligentGeneration;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductIntelligentGeneration $intelligentGeneration
     * @return self
     */
    public function setIntelligentGeneration(?string $intelligentGeneration): self
    {
        $this->intelligentGeneration = $intelligentGeneration;
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
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerTitleMaterialListInner[] $titleMaterialList
     * @return self
     */
    public function setTitleMaterialList(?array $titleMaterialList): self
    {
        $this->titleMaterialList = $titleMaterialList;
        return $this;
    }

    /**
     * @return string
     */
    public function getUlink(): ?string
    {
        return $this->ulink;
    }

    /**
     * @param string $ulink
     * @return self
     */
    public function setUlink(?string $ulink): self
    {
        $this->ulink = $ulink;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductUlinkType
     */
    public function getUlinkType(): ?string
    {
        return $this->ulinkType;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductUlinkType $ulinkType
     * @return self
     */
    public function setUlinkType(?string $ulinkType): self
    {
        $this->ulinkType = $ulinkType;
        return $this;
    }

    /**
     * @return int
     */
    public function getUniqueProductId(): ?int
    {
        return $this->uniqueProductId;
    }

    /**
     * @param int $uniqueProductId
     * @return self
     */
    public function setUniqueProductId(?int $uniqueProductId): self
    {
        $this->uniqueProductId = $uniqueProductId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerVideoMaterialListInner[]
     */
    public function getVideoMaterialList(): ?array
    {
        return $this->videoMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerVideoMaterialListInner[] $videoMaterialList
     * @return self
     */
    public function setVideoMaterialList(?array $videoMaterialList): self
    {
        $this->videoMaterialList = $videoMaterialList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorMaterialList !== null) {
            $result['anchor_material_list'] = $this->anchorMaterialList;
        }
        if ($this->anchorRelatedType !== null) {
            $result['anchor_related_type'] = $this->anchorRelatedType;
        }
        if ($this->callToActionButtons !== null) {
            $result['call_to_action_buttons'] = $this->callToActionButtons;
        }
        if ($this->componentMaterialList !== null) {
            $result['component_material_list'] = $this->componentMaterialList;
        }
        if ($this->externalUrlMaterialList !== null) {
            $result['external_url_material_list'] = $this->externalUrlMaterialList;
        }
        if ($this->imageMaterialList !== null) {
            $result['image_material_list'] = $this->imageMaterialList;
        }
        if ($this->intelligentGeneration !== null) {
            $result['intelligent_generation'] = $this->intelligentGeneration;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->titleMaterialList !== null) {
            $result['title_material_list'] = $this->titleMaterialList;
        }
        if ($this->ulink !== null) {
            $result['ulink'] = $this->ulink;
        }
        if ($this->ulinkType !== null) {
            $result['ulink_type'] = $this->ulinkType;
        }
        if ($this->uniqueProductId !== null) {
            $result['unique_product_id'] = $this->uniqueProductId;
        }
        if ($this->videoMaterialList !== null) {
            $result['video_material_list'] = $this->videoMaterialList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_material_list'] ?? null) !== null && is_array($v)) {
            $obj->anchorMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerAnchorMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['anchor_related_type'] ?? null) !== null) {
            $obj->anchorRelatedType = (string) $v;
        }
        if (($v = $data['call_to_action_buttons'] ?? null) !== null && is_array($v)) {
            $obj->callToActionButtons = $v;
        }
        if (($v = $data['component_material_list'] ?? null) !== null && is_array($v)) {
            $obj->componentMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerComponentMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['external_url_material_list'] ?? null) !== null && is_array($v)) {
            $obj->externalUrlMaterialList = $v;
        }
        if (($v = $data['image_material_list'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerImageMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['intelligent_generation'] ?? null) !== null) {
            $obj->intelligentGeneration = (string) $v;
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['ulink'] ?? null) !== null) {
            $obj->ulink = (string) $v;
        }
        if (($v = $data['ulink_type'] ?? null) !== null) {
            $obj->ulinkType = (string) $v;
        }
        if (($v = $data['unique_product_id'] ?? null) !== null) {
            $obj->uniqueProductId = (int) $v;
        }
        if (($v = $data['video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerVideoMaterialListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
