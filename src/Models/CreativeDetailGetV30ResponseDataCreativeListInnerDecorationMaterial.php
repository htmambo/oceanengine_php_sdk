<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeListInnerDecorationMaterial implements \JsonSerializable
{
    /**
     * 活动 ID
     * @var string
     */
    protected ?string $activityId = null;

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activityId !== null) {
            $result['activity_id'] = $this->activityId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (string) $v;
        }
        return $obj;
    }
}
