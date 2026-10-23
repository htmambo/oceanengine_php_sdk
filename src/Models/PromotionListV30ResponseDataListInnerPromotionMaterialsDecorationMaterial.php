<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerPromotionMaterialsDecorationMaterial implements \JsonSerializable
{
    /**
     * 卡券活动id
     * @var string
     */
    protected ?string $activityId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsDecorationMaterialImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 卡券活动id
     * @return string
     */
    public function getActivityId(): ?string
    {
        return $this->activityId;
    }

    /**
     * 卡券活动id
     * @param string $activityId
     * @return self
     */
    public function setActivityId(?string $activityId): self
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsDecorationMaterialImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListPromotionMaterialsDecorationMaterialImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activityId !== null) {
            $result['activity_id'] = $this->activityId;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        return $obj;
    }
}
