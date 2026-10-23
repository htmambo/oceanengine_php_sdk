<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeCreateV2RequestCreativeDecorationMaterial implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $activityId = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeDecorationMaterialImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     * @return self
     */
    public function setActivityId(?int $activityId): self
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeDecorationMaterialImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeDecorationMaterialImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (int) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        return $obj;
    }
}
