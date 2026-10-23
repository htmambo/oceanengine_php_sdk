<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionUpdateV30RequestProceduralMaterial implements \JsonSerializable
{
    /**
     * 图文素材
     * @var \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialCarouselMaterialListInner[]
     */
    protected ?array $carouselMaterialList = null;

    /**
     * 标题素材，长度[1,30]
     * @var \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * 视频素材
     * @var \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialVideoMaterialListInner[]
     */
    protected ?array $videoMaterialList = null;

    /**
     * 图文素材
     * @return \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialCarouselMaterialListInner[]
     */
    public function getCarouselMaterialList(): ?array
    {
        return $this->carouselMaterialList;
    }

    /**
     * 图文素材
     * @param \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialCarouselMaterialListInner[] $carouselMaterialList
     * @return self
     */
    public function setCarouselMaterialList(?array $carouselMaterialList): self
    {
        $this->carouselMaterialList = $carouselMaterialList;
        return $this;
    }

    /**
     * 标题素材，长度[1,30]
     * @return \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * 标题素材，长度[1,30]
     * @param \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialTitleMaterialListInner[] $titleMaterialList
     * @return self
     */
    public function setTitleMaterialList(?array $titleMaterialList): self
    {
        $this->titleMaterialList = $titleMaterialList;
        return $this;
    }

    /**
     * 视频素材
     * @return \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialVideoMaterialListInner[]
     */
    public function getVideoMaterialList(): ?array
    {
        return $this->videoMaterialList;
    }

    /**
     * 视频素材
     * @param \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialVideoMaterialListInner[] $videoMaterialList
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
            $obj->carouselMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialCarouselMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterialVideoMaterialListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
