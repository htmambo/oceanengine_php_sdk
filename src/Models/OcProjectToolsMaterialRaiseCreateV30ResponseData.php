<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsMaterialRaiseCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataError
     */
    protected ?\Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataError $error = null;

    /**
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataError
     */
    public function getError(): ?\Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataError
    {
        return $this->error;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataError $error
     * @return self
     */
    public function setError(?\Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataError $error): self
    {
        $this->error = $error;
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
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error'] ?? null) !== null && is_array($v)) {
            $obj->error = \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30ResponseDataError::fromArray($v);
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        return $obj;
    }
}
