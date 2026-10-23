<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponUpdateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $activityId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $deliverEnd = null;

    /**
     * @var string
     */
    protected ?string $deliverStart = null;

    /**
     * @var \Oceanengine\Models\ClueCouponUpdateV2RequestGlobalLimit
     */
    protected ?\Oceanengine\Models\ClueCouponUpdateV2RequestGlobalLimit $globalLimit = null;

    /**
     * @var \Oceanengine\Models\ClueCouponUpdateV2Status
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\ClueCouponUpdateV2RequestUserLimit
     */
    protected ?\Oceanengine\Models\ClueCouponUpdateV2RequestUserLimit $userLimit = null;

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
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliverEnd(): ?string
    {
        return $this->deliverEnd;
    }

    /**
     * @param string $deliverEnd
     * @return self
     */
    public function setDeliverEnd(?string $deliverEnd): self
    {
        $this->deliverEnd = $deliverEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliverStart(): ?string
    {
        return $this->deliverStart;
    }

    /**
     * @param string $deliverStart
     * @return self
     */
    public function setDeliverStart(?string $deliverStart): self
    {
        $this->deliverStart = $deliverStart;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponUpdateV2RequestGlobalLimit
     */
    public function getGlobalLimit(): ?\Oceanengine\Models\ClueCouponUpdateV2RequestGlobalLimit
    {
        return $this->globalLimit;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponUpdateV2RequestGlobalLimit $globalLimit
     * @return self
     */
    public function setGlobalLimit(?\Oceanengine\Models\ClueCouponUpdateV2RequestGlobalLimit $globalLimit): self
    {
        $this->globalLimit = $globalLimit;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponUpdateV2Status
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponUpdateV2Status $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponUpdateV2RequestUserLimit
     */
    public function getUserLimit(): ?\Oceanengine\Models\ClueCouponUpdateV2RequestUserLimit
    {
        return $this->userLimit;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponUpdateV2RequestUserLimit $userLimit
     * @return self
     */
    public function setUserLimit(?\Oceanengine\Models\ClueCouponUpdateV2RequestUserLimit $userLimit): self
    {
        $this->userLimit = $userLimit;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->deliverEnd !== null) {
            $result['deliver_end'] = $this->deliverEnd;
        }
        if ($this->deliverStart !== null) {
            $result['deliver_start'] = $this->deliverStart;
        }
        if ($this->globalLimit !== null) {
            $result['global_limit'] = $this->globalLimit;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->userLimit !== null) {
            $result['user_limit'] = $this->userLimit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['deliver_end'] ?? null) !== null) {
            $obj->deliverEnd = $v;
        }
        if (($v = $data['deliver_start'] ?? null) !== null) {
            $obj->deliverStart = $v;
        }
        if (($v = $data['global_limit'] ?? null) !== null && is_array($v)) {
            $obj->globalLimit = \Oceanengine\Models\ClueCouponUpdateV2RequestGlobalLimit::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['user_limit'] ?? null) !== null && is_array($v)) {
            $obj->userLimit = \Oceanengine\Models\ClueCouponUpdateV2RequestUserLimit::fromArray($v);
        }
        return $obj;
    }
}
