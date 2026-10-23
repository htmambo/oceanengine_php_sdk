<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInner implements \JsonSerializable
{
    /**
     * 图文素材carousel_id
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * 图文图片信息
     * @var \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerImageListInner[]
     */
    protected ?array $imageList = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerMusic
     */
    protected ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerMusic $music = null;

    /**
     * 图文素材carousel_id
     * @return int
     */
    public function getCarouselId(): ?int
    {
        return $this->carouselId;
    }

    /**
     * 图文素材carousel_id
     * @param int $carouselId
     * @return self
     */
    public function setCarouselId(?int $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * 图文图片信息
     * @return \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerImageListInner[]
     */
    public function getImageList(): ?array
    {
        return $this->imageList;
    }

    /**
     * 图文图片信息
     * @param \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerImageListInner[] $imageList
     * @return self
     */
    public function setImageList(?array $imageList): self
    {
        $this->imageList = $imageList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerMusic
     */
    public function getMusic(): ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerMusic
    {
        return $this->music;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerMusic $music
     * @return self
     */
    public function setMusic(?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerMusic $music): self
    {
        $this->music = $music;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->imageList !== null) {
            $result['image_list'] = $this->imageList;
        }
        if ($this->music !== null) {
            $result['music'] = $this->music;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['image_list'] ?? null) !== null && is_array($v)) {
            $obj->imageList = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerImageListInner::fromArray($vv), $v);
        }
        if (($v = $data['music'] ?? null) !== null && is_array($v)) {
            $obj->music = \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterialCarouselMaterialListInnerMusic::fromArray($v);
        }
        return $obj;
    }
}
