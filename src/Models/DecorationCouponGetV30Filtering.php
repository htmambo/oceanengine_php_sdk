<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DecorationCouponGetV30Filtering implements \JsonSerializable
{
    /**
     * 活动ID
     * @var string
     */
    protected ?string $activityId = null;

    /**
     * 活动名称
     * @var string
     */
    protected ?string $activityName = null;

    /**
     * 活动ID
     * @return string
     */
    public function getActivityId(): ?string
    {
        return $this->activityId;
    }

    /**
     * 活动ID
     * @param string $activityId
     * @return self
     */
    public function setActivityId(?string $activityId): self
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * 活动名称
     * @return string
     */
    public function getActivityName(): ?string
    {
        return $this->activityName;
    }

    /**
     * 活动名称
     * @param string $activityName
     * @return self
     */
    public function setActivityName(?string $activityName): self
    {
        $this->activityName = $activityName;
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
        if ($this->activityName !== null) {
            $result['activity_name'] = $this->activityName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (string) $v;
        }
        if (($v = $data['activity_name'] ?? null) !== null) {
            $obj->activityName = (string) $v;
        }
        return $obj;
    }
}
