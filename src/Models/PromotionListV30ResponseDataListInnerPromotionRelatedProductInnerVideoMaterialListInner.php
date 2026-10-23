<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerPromotionRelatedProductInnerVideoMaterialListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListIsCarryMaterial
     */
    protected ?string $isCarryMaterial = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus
     */
    protected ?string $materialOptStatus = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialStatus
     */
    protected ?string $materialStatus = null;

    /**
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListVideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var string
     */
    protected ?string $visibleEndDate = null;

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListIsCarryMaterial
     */
    public function getIsCarryMaterial(): ?string
    {
        return $this->isCarryMaterial;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListIsCarryMaterial $isCarryMaterial
     * @return self
     */
    public function setIsCarryMaterial(?string $isCarryMaterial): self
    {
        $this->isCarryMaterial = $isCarryMaterial;
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
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus
     */
    public function getMaterialOptStatus(): ?string
    {
        return $this->materialOptStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialOptStatus $materialOptStatus
     * @return self
     */
    public function setMaterialOptStatus(?string $materialOptStatus): self
    {
        $this->materialOptStatus = $materialOptStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListMaterialStatus $materialStatus
     * @return self
     */
    public function setMaterialStatus(?string $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListVideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionRelatedProductVideoMaterialListVideoHpVisibility $videoHpVisibility
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
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
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
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->isCarryMaterial !== null) {
            $result['is_carry_material'] = $this->isCarryMaterial;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialOptStatus !== null) {
            $result['material_opt_status'] = $this->materialOptStatus;
        }
        if ($this->materialStatus !== null) {
            $result['material_status'] = $this->materialStatus;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoHpVisibility !== null) {
            $result['video_hp_visibility'] = $this->videoHpVisibility;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->visibleEndDate !== null) {
            $result['visible_end_date'] = $this->visibleEndDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['is_carry_material'] ?? null) !== null) {
            $obj->isCarryMaterial = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_opt_status'] ?? null) !== null) {
            $obj->materialOptStatus = (string) $v;
        }
        if (($v = $data['material_status'] ?? null) !== null) {
            $obj->materialStatus = (string) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['visible_end_date'] ?? null) !== null) {
            $obj->visibleEndDate = (string) $v;
        }
        return $obj;
    }
}
