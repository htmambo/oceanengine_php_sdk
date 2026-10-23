<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerPromotionMaterialsVideoMaterialListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListAutoMaterialSource
     */
    protected ?string $autoMaterialSource = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 引导视频id
     * @var string
     */
    protected ?string $guideVideoId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListIsCarryMaterial
     */
    protected ?string $isCarryMaterial = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListIsHiddenWatermark
     */
    protected ?string $isHiddenWatermark = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus
     */
    protected ?string $materialOptStatus = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialStatus
     */
    protected ?string $materialStatus = null;

    /**
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var string[]
     */
    protected ?array $videoTaskIds = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType
     */
    protected ?string $videoTemplateType = null;

    /**
     * @var string
     */
    protected ?string $visibleEndDate = null;

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListAutoMaterialSource
     */
    public function getAutoMaterialSource(): ?string
    {
        return $this->autoMaterialSource;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListAutoMaterialSource $autoMaterialSource
     * @return self
     */
    public function setAutoMaterialSource(?string $autoMaterialSource): self
    {
        $this->autoMaterialSource = $autoMaterialSource;
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
     * 引导视频id
     * @return string
     */
    public function getGuideVideoId(): ?string
    {
        return $this->guideVideoId;
    }

    /**
     * 引导视频id
     * @param string $guideVideoId
     * @return self
     */
    public function setGuideVideoId(?string $guideVideoId): self
    {
        $this->guideVideoId = $guideVideoId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListIsCarryMaterial
     */
    public function getIsCarryMaterial(): ?string
    {
        return $this->isCarryMaterial;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListIsCarryMaterial $isCarryMaterial
     * @return self
     */
    public function setIsCarryMaterial(?string $isCarryMaterial): self
    {
        $this->isCarryMaterial = $isCarryMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListIsHiddenWatermark
     */
    public function getIsHiddenWatermark(): ?string
    {
        return $this->isHiddenWatermark;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListIsHiddenWatermark $isHiddenWatermark
     * @return self
     */
    public function setIsHiddenWatermark(?string $isHiddenWatermark): self
    {
        $this->isHiddenWatermark = $isHiddenWatermark;
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
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus
     */
    public function getMaterialOptStatus(): ?string
    {
        return $this->materialOptStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialOptStatus $materialOptStatus
     * @return self
     */
    public function setMaterialOptStatus(?string $materialOptStatus): self
    {
        $this->materialOptStatus = $materialOptStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListMaterialStatus $materialStatus
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
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility $videoHpVisibility
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
     * @return string[]
     */
    public function getVideoTaskIds(): ?array
    {
        return $this->videoTaskIds;
    }

    /**
     * @param string[] $videoTaskIds
     * @return self
     */
    public function setVideoTaskIds(?array $videoTaskIds): self
    {
        $this->videoTaskIds = $videoTaskIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType
     */
    public function getVideoTemplateType(): ?string
    {
        return $this->videoTemplateType;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType $videoTemplateType
     * @return self
     */
    public function setVideoTemplateType(?string $videoTemplateType): self
    {
        $this->videoTemplateType = $videoTemplateType;
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
        if ($this->autoMaterialSource !== null) {
            $result['auto_material_source'] = $this->autoMaterialSource;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->guideVideoId !== null) {
            $result['guide_video_id'] = $this->guideVideoId;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->isCarryMaterial !== null) {
            $result['is_carry_material'] = $this->isCarryMaterial;
        }
        if ($this->isHiddenWatermark !== null) {
            $result['is_hidden_watermark'] = $this->isHiddenWatermark;
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
        if ($this->videoTaskIds !== null) {
            $result['video_task_ids'] = $this->videoTaskIds;
        }
        if ($this->videoTemplateType !== null) {
            $result['video_template_type'] = $this->videoTemplateType;
        }
        if ($this->visibleEndDate !== null) {
            $result['visible_end_date'] = $this->visibleEndDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auto_material_source'] ?? null) !== null) {
            $obj->autoMaterialSource = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['guide_video_id'] ?? null) !== null) {
            $obj->guideVideoId = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['is_carry_material'] ?? null) !== null) {
            $obj->isCarryMaterial = (string) $v;
        }
        if (($v = $data['is_hidden_watermark'] ?? null) !== null) {
            $obj->isHiddenWatermark = (string) $v;
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
        if (($v = $data['video_task_ids'] ?? null) !== null && is_array($v)) {
            $obj->videoTaskIds = $v;
        }
        if (($v = $data['video_template_type'] ?? null) !== null) {
            $obj->videoTemplateType = (string) $v;
        }
        if (($v = $data['visible_end_date'] ?? null) !== null) {
            $obj->visibleEndDate = (string) $v;
        }
        return $obj;
    }
}
