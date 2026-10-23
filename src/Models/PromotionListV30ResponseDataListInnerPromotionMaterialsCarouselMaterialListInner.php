<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerPromotionMaterialsCarouselMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $audioId = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 图文作品描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string[]
     */
    protected ?array $imageId = null;

    /**
     * @var bool
     */
    protected ?bool $isBlueFlowRecommendMaterial = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsCarouselMaterialListMaterialStatus
     */
    protected ?string $materialStatus = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * @var string
     */
    protected ?string $visibleEndDate = null;

    /**
     * @return string
     */
    public function getAudioId(): ?string
    {
        return $this->audioId;
    }

    /**
     * @param string $audioId
     * @return self
     */
    public function setAudioId(?string $audioId): self
    {
        $this->audioId = $audioId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 图文作品描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 图文作品描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImageId(): ?array
    {
        return $this->imageId;
    }

    /**
     * @param string[] $imageId
     * @return self
     */
    public function setImageId(?array $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBlueFlowRecommendMaterial(): ?bool
    {
        return $this->isBlueFlowRecommendMaterial;
    }

    /**
     * @param bool $isBlueFlowRecommendMaterial
     * @return self
     */
    public function setIsBlueFlowRecommendMaterial(?bool $isBlueFlowRecommendMaterial): self
    {
        $this->isBlueFlowRecommendMaterial = $isBlueFlowRecommendMaterial;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsCarouselMaterialListMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsCarouselMaterialListMaterialStatus $materialStatus
     * @return self
     */
    public function setMaterialStatus(?string $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility $videoHpVisibility
     * @return self
     */
    public function setVideoHpVisibility(?string $videoHpVisibility): self
    {
        $this->videoHpVisibility = $videoHpVisibility;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisibleEndDate(): ?string
    {
        return $this->visibleEndDate;
    }

    /**
     * @param string $visibleEndDate
     * @return self
     */
    public function setVisibleEndDate(?string $visibleEndDate): self
    {
        $this->visibleEndDate = $visibleEndDate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audioId !== null) {
            $result['audio_id'] = $this->audioId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->isBlueFlowRecommendMaterial !== null) {
            $result['is_blue_flow_recommend_material'] = $this->isBlueFlowRecommendMaterial;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialStatus !== null) {
            $result['material_status'] = $this->materialStatus;
        }
        if ($this->videoHpVisibility !== null) {
            $result['video_hp_visibility'] = $this->videoHpVisibility;
        }
        if ($this->visibleEndDate !== null) {
            $result['visible_end_date'] = $this->visibleEndDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio_id'] ?? null) !== null) {
            $obj->audioId = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['image_id'] ?? null) !== null && is_array($v)) {
            $obj->imageId = $v;
        }
        if (($v = $data['is_blue_flow_recommend_material'] ?? null) !== null) {
            $obj->isBlueFlowRecommendMaterial = (bool) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_status'] ?? null) !== null) {
            $obj->materialStatus = (string) $v;
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        if (($v = $data['visible_end_date'] ?? null) !== null) {
            $obj->visibleEndDate = (string) $v;
        }
        return $obj;
    }
}
