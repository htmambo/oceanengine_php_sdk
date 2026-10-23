<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdScheduleDateUpdateV10RequestUpdateScheduleInfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10UpdateScheduleInfosScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10UpdateScheduleInfosScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdScheduleDateUpdateV10UpdateScheduleInfosScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        return $obj;
    }
}
