<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcMaterialGetV30ResponseDataProceduralMaterial implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialCarouselMaterialListInner[]
     */
    protected ?array $carouselMaterialList = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialComponentMaterialListInner[]
     */
    protected ?array $componentMaterialList = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfo
     */
    protected ?\Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfo $promotionCardInfo = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialVideoMaterialListInner[]
     */
    protected ?array $videoMaterialList = null;

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialCarouselMaterialListInner[]
     */
    public function getCarouselMaterialList(): ?array
    {
        return $this->carouselMaterialList;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialCarouselMaterialListInner[] $carouselMaterialList
     * @return self
     */
    public function setCarouselMaterialList(?array $carouselMaterialList): self
    {
        $this->carouselMaterialList = $carouselMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialComponentMaterialListInner[]
     */
    public function getComponentMaterialList(): ?array
    {
        return $this->componentMaterialList;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialComponentMaterialListInner[] $componentMaterialList
     * @return self
     */
    public function setComponentMaterialList(?array $componentMaterialList): self
    {
        $this->componentMaterialList = $componentMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfo
     */
    public function getPromotionCardInfo(): ?\Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfo
    {
        return $this->promotionCardInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfo $promotionCardInfo
     * @return self
     */
    public function setPromotionCardInfo(?\Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfo $promotionCardInfo): self
    {
        $this->promotionCardInfo = $promotionCardInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialTitleMaterialListInner[] $titleMaterialList
     * @return self
     */
    public function setTitleMaterialList(?array $titleMaterialList): self
    {
        $this->titleMaterialList = $titleMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialVideoMaterialListInner[]
     */
    public function getVideoMaterialList(): ?array
    {
        return $this->videoMaterialList;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialVideoMaterialListInner[] $videoMaterialList
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
        if ($this->carouselMaterialList !== null) {
            $result['carousel_material_list'] = $this->carouselMaterialList;
        }
        if ($this->componentMaterialList !== null) {
            $result['component_material_list'] = $this->componentMaterialList;
        }
        if ($this->promotionCardInfo !== null) {
            $result['promotion_card_info'] = $this->promotionCardInfo;
        }
        if ($this->titleMaterialList !== null) {
            $result['title_material_list'] = $this->titleMaterialList;
        }
        if ($this->videoMaterialList !== null) {
            $result['video_material_list'] = $this->videoMaterialList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_material_list'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialCarouselMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['component_material_list'] ?? null) !== null && is_array($v)) {
            $obj->componentMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialComponentMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_card_info'] ?? null) !== null && is_array($v)) {
            $obj->promotionCardInfo = \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialPromotionCardInfo::fromArray($v);
        }
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterialVideoMaterialListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
