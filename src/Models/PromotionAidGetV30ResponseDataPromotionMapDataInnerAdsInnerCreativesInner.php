<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerImageMaterials
     */
    protected ?\Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerImageMaterials $imageMaterials = null;

    /**
     * @var \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerTitleMaterial
     */
    protected ?\Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerVideoMaterial $videoMaterial = null;

    /**
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerImageMaterials
     */
    public function getImageMaterials(): ?\Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerImageMaterials
    {
        return $this->imageMaterials;
    }

    /**
     * @param \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerImageMaterials $imageMaterials
     * @return self
     */
    public function setImageMaterials(?\Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerImageMaterials $imageMaterials): self
    {
        $this->imageMaterials = $imageMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerVideoMaterial $videoMaterial): self
    {
        $this->videoMaterial = $videoMaterial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->imageMaterials !== null) {
            $result['image_materials'] = $this->imageMaterials;
        }
        if ($this->titleMaterial !== null) {
            $result['title_material'] = $this->titleMaterial;
        }
        if ($this->videoMaterial !== null) {
            $result['video_material'] = $this->videoMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['image_materials'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterials = \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerImageMaterials::fromArray($v);
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
