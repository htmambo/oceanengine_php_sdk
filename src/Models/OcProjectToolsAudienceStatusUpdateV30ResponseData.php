<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceStatusUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceStatusUpdateV30ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * @var int[]
     */
    protected ?array $scheduleIds = null;

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceStatusUpdateV30ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceStatusUpdateV30ResponseDataErrorListInner[] $errorList
     * @return self
     */
    public function setErrorList(?array $errorList): self
    {
        $this->errorList = $errorList;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getScheduleIds(): ?array
    {
        return $this->scheduleIds;
    }

    /**
     * @param int[] $scheduleIds
     * @return self
     */
    public function setScheduleIds(?array $scheduleIds): self
    {
        $this->scheduleIds = $scheduleIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorList !== null) {
            $result['error_list'] = $this->errorList;
        }
        if ($this->scheduleIds !== null) {
            $result['schedule_ids'] = $this->scheduleIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_list'] ?? null) !== null && is_array($v)) {
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectToolsAudienceStatusUpdateV30ResponseDataErrorListInner::fromArray($vv), $v);
        }
        if (($v = $data['schedule_ids'] ?? null) !== null && is_array($v)) {
            $obj->scheduleIds = $v;
        }
        return $obj;
    }
}
