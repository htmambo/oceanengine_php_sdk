<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeDecorationMaterial implements \JsonSerializable
{
    /**
     * 活动 ID
     * @var string
     */
    protected ?string $activityId = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataCreativeDecorationMaterialImageMode
     */
    protected ?string $imageMode = null;

    /**
     * 活动 ID
     * @return string
     */
    public function getActivityId(): ?string
    {
        return $this->activityId;
    }

    /**
     * 活动 ID
     * @param string $activityId
     * @return self
     */
    public function setActivityId(?string $activityId): self
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataCreativeDecorationMaterialImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataCreativeDecorationMaterialImageMode $imageMode
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
            $obj->activityId = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        return $obj;
    }
}
