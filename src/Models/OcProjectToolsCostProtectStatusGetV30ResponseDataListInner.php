<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsCostProtectStatusGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $compensateAmount = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons[]
     */
    protected ?array $compensateEndReasons = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons[]
     */
    protected ?array $compensateInvalidReasons = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus
     */
    protected ?string $compensateStatus = null;

    /**
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * @return float
     */
    public function getCompensateAmount(): ?float
    {
        return $this->compensateAmount;
    }

    /**
     * @param float $compensateAmount
     * @return self
     */
    public function setCompensateAmount(?float $compensateAmount): self
    {
        $this->compensateAmount = $compensateAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons[]
     */
    public function getCompensateEndReasons(): ?array
    {
        return $this->compensateEndReasons;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons[] $compensateEndReasons
     * @return self
     */
    public function setCompensateEndReasons(?array $compensateEndReasons): self
    {
        $this->compensateEndReasons = $compensateEndReasons;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons[]
     */
    public function getCompensateInvalidReasons(): ?array
    {
        return $this->compensateInvalidReasons;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons[] $compensateInvalidReasons
     * @return self
     */
    public function setCompensateInvalidReasons(?array $compensateInvalidReasons): self
    {
        $this->compensateInvalidReasons = $compensateInvalidReasons;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus
     */
    public function getCompensateStatus(): ?string
    {
        return $this->compensateStatus;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus $compensateStatus
     * @return self
     */
    public function setCompensateStatus(?string $compensateStatus): self
    {
        $this->compensateStatus = $compensateStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->compensateAmount !== null) {
            $result['compensate_amount'] = $this->compensateAmount;
        }
        if ($this->compensateEndReasons !== null) {
            $result['compensate_end_reasons'] = $this->compensateEndReasons;
        }
        if ($this->compensateInvalidReasons !== null) {
            $result['compensate_invalid_reasons'] = $this->compensateInvalidReasons;
        }
        if ($this->compensateStatus !== null) {
            $result['compensate_status'] = $this->compensateStatus;
        }
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['compensate_amount'] ?? null) !== null) {
            $obj->compensateAmount = (float) $v;
        }
        if (($v = $data['compensate_end_reasons'] ?? null) !== null && is_array($v)) {
            $obj->compensateEndReasons = $v;
        }
        if (($v = $data['compensate_invalid_reasons'] ?? null) !== null && is_array($v)) {
            $obj->compensateInvalidReasons = $v;
        }
        if (($v = $data['compensate_status'] ?? null) !== null) {
            $obj->compensateStatus = (string) $v;
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        return $obj;
    }
}
